<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%invoice_item}}".
 *
 * @property int $id
 * @property int $invoice_id
 * @property string $item_description
 * @property double $item_cost
 * @property int $created_at
 * @property int $updated_at
 * @property int $updated_by
 * @property int $created_by
 * @property string $slug
 * @property int $is_deleted
 *
 * @property Invoice $invoice
 */
class InvoiceItem extends \common\extend\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%invoice_item}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'item_cost'], 'required'],
            [['invoice_id', 'created_at', 'updated_at', 'updated_by', 'created_by', 'is_deleted'], 'integer'],
            [['item_description'], 'string'],
            [['item_cost'], 'number'],
            [['slug'], 'string', 'max' => 30],
            [['slug'], 'unique'],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => Invoice::className(), 'targetAttribute' => ['invoice_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'invoice_id' => 'Invoice ID',
            'item_description' => 'Item Description',
            'item_cost' => 'Item Cost',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'created_by' => 'Created By',
            'slug' => 'Slug',
            'is_deleted' => 'Is Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoice()
    {
        return $this->hasOne(Invoice::className(), ['id' => 'invoice_id']);
    }
}
