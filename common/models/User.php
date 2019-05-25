<?php

namespace common\models;

use common\models\base\User as BaseUser;
use Yii;
use yii\base\Exception;
use yii\base\NotSupportedException;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $verification_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 *
 * @property string $authKey
 * @property UserProfile $userProfiles
 */
class User extends BaseUser implements IdentityInterface
{
    public $password;
    public $confirm_password;

    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;

    const USER_ADMIN = 101;
    const USER_CLIENT = 102;

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['slug']['attribute'] = 'username';

        return $behaviors;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        $rules = parent::rules();
        //   $rules[] = ['user_type', 'in', 'allowArray' => true, 'range' => [UserType::USER_PASSENGER, UserType::USER_DRIVER], 'message' => 'Invalid user type'];
        $rules[] = ['status', 'default', 'value' => self::STATUS_INACTIVE];
        $rules[] = [['password', 'confirm_password'], 'required'];
        $rules[] = ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_DELETED]];
        //$rules[] = [['password'], PasswordValidator::class, 'preset' => PasswordValidator::SIMPLE, 'userAttribute' => 'username'];
        $rules[] = ['confirm_password', 'compare', 'compareAttribute' => 'password'];

        $rules[] = ['user_type', 'default', 'value' => self::USER_CLIENT];
        $rules[] = ['email', 'email'];
        $rules[] = ['username', 'string', 'min' => 3, 'max' => 255];
        $rules[] = ['email', 'string', 'max' => 255];
        $rules[] = [['password', 'confirm_password'], 'string', 'min' => 6];
        return $rules;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     * @throws NotSupportedException
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds user by verification email token
     *
     * @param string $token verify email token
     * @return static|null
     */
    public static function findByVerificationToken($token)
    {
        return static::findOne([
            'verification_token' => $token,
            'status' => self::STATUS_INACTIVE
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int)substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     * @throws Exception
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    public function generateEmailVerificationToken()
    {
        $this->verification_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     * @throws Exception
     */
    public function setCredentials()
    {
        $this->setPassword($this->password);
        $this->generateAuthKey();
        $this->generateEmailVerificationToken();
    }

    public static function getAllUsers()
    {
        $users = User::find()
            ->where(['!=', 'user_type', self::USER_ADMIN])
            ->orderBy('id')
            ->asArray();
        return ArrayHelper::map($users->all(), 'id', 'username');
    }


    public function accountStatusList()
    {
        return [
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_INACTIVE => 'Inactive',
            self::STATUS_DELETED => 'Deleted',
        ];
    }

    public function userTypeList()
    {
        return [
            self::USER_ADMIN => 'Administrator',
            self::USER_CLIENT => 'Customer',
        ];
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
