<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $verification_token
 * @property string $slug
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $user_type
 * @property integer $is_deleted
 *
 * @property \common\models\Invoice[] $invoices
 * @property \common\models\UserProfile $userProfile
 */
class User extends \common\extend\models\BaseModel
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'auth_key', 'password_hash'], 'required'],
            [['status', 'created_at', 'updated_at', 'created_by', 'updated_by', 'user_type', 'is_deleted'], 'integer'],
            [['username'], 'string', 'max' => 100],
            [['email', 'password_hash', 'password_reset_token', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 64],
            [['slug'], 'string', 'max' => 30],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['slug'], 'unique']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'verification_token' => 'Verification Token',
            'slug' => 'Slug',
            'user_type' => 'User Type',
            'is_deleted' => 'Is Deleted',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(\common\models\Invoice::className(), ['user_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfile()
    {
        return $this->hasOne(\common\models\UserProfile::className(), ['user_id' => 'id']);
    }
    }
