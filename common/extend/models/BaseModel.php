<?php


namespace common\extend\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use Zelenin\yii\behaviors\Slug;

class BaseModel extends ActiveRecord
{

    /**
     * @inheritdoc
     * @return array mixed
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
            ],
            'blameable' => [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'created_by',
            ],
            'slug' => [
                'class' => Slug::class,
                //'attribute' => ['name', 'language.username'],
                'attribute' => 'id',
                'slugAttribute' => 'slug',
                'ensureUnique' => true,
                'replacement' => '-',
                'lowercase' => true,
                'immutable' => false
            ],
        ];
    }
}