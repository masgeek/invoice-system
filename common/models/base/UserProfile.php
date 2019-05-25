<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%user_profile}}".
 *
 * @property int $id
 * @property int $user_id
 * @property string $company_name
 * @property string $surname
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $address
 * @property string $notes
 * @property int $created_at
 * @property int $updated_at
 * @property string $slug
 * @property int $created_by
 * @property int $updated_by
 * @property string $country_code
 * @property int $is_deleted
 *
 * @property User $user
 */
class UserProfile extends \common\extend\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user_profile}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['company_name', 'surname', 'first_name', 'phone_number', 'country_code'], 'required'],
            [['address', 'notes'], 'string'],
            [['company_name'], 'string', 'max' => 120],
            [['surname', 'first_name', 'last_name'], 'string', 'max' => 255],
            [['phone_number'], 'string', 'max' => 50],
            [['slug'], 'string', 'max' => 30],
            [['country_code'], 'string', 'max' => 8],
            [['slug'], 'unique'],
            [['user_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'company_name' => 'Company Name',
            'surname' => 'Surname',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'phone_number' => 'Phone Number',
            'address' => 'Address',
            'notes' => 'Notes',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'slug' => 'Slug',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'country_code' => 'Country Code',
            'is_deleted' => 'Is Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
