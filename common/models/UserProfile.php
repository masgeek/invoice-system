<?php

namespace common\models;

use common\models\base\UserProfile as BaseUserProfile;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user_profile".
 */
class UserProfile extends BaseUserProfile
{
    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['user_id', 'required'];
        return $rules;
    }

    /**
     * This function will return records only for those users whose profile has not been created
     * @param bool $isNewRecord
     * @return array
     */
    public function newUserAccounts($isNewRecord = false)
    {
        $createdUsers = self::find()
            ->select('user_id')
            ->asArray()
            ->all();

        $userIdToExclude = ArrayHelper::getColumn($createdUsers, 'user_id', false);
        $usersArray = User::find();

        if ($isNewRecord) {
            $usersArray->where(['NOT IN', 'id', $userIdToExclude]);
        } else {
            $usersArray->where(['id' => $this->user_id]);
        }
        $usersArray->orderBy('id')->asArray();

        $allUsers = ArrayHelper::map($usersArray->all(), 'id', 'username');

        return $allUsers;
    }
}
