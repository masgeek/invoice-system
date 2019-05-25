<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%invoice_status}}".
 *
 * @property int $id
 * @property string $status
 * @property string $color
 * @property string $slug
 * @property int $created_at
 * @property int $updated_at
 * @property int $updated_by
 * @property int $created_by
 * @property int $is_deleted
 *
 * @property Invoice[] $invoices
 */
class InvoiceStatus extends \common\extend\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%invoice_status}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['created_at', 'updated_at', 'updated_by', 'created_by', 'is_deleted'], 'integer'],
            [['status', 'slug'], 'string', 'max' => 30],
            [['color'], 'string', 'max' => 15],
            [['slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'color' => 'Color',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'created_by' => 'Created By',
            'is_deleted' => 'Is Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(Invoice::className(), ['invoice_status_id' => 'id']);
    }
}
