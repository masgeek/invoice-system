<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "{{%user_profile}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $company_name
 * @property string $surname
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $address
 * @property string $notes
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $slug
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $country_code
 * @property integer $is_deleted
 *
 * @property \common\models\User $user
 */
class UserProfile extends \common\extend\models\BaseModel
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['company_name', 'surname', 'first_name', 'phone_number', 'country_code'], 'required'],
            [['address', 'notes'], 'string'],
            [['company_name'], 'string', 'max' => 120],
            [['surname', 'first_name', 'last_name'], 'string', 'max' => 255],
            [['phone_number'], 'string', 'max' => 50],
            [['slug'], 'string', 'max' => 30],
            [['country_code'], 'string', 'max' => 8],
            [['is_deleted'], 'string', 'max' => 1],
            [['slug'], 'unique'],
            [['user_id'], 'unique']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_profile}}';
    }

    /**
     * @inheritdoc
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
            'slug' => 'Slug',
            'country_code' => 'Country Code',
            'is_deleted' => 'Is Deleted',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
    }
    }
