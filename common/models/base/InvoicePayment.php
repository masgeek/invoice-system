<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%invoice_payment}}".
 *
 * @property int $id
 * @property int $invoice_id
 * @property int $merchant_name
 * @property double $amount_paid
 * @property int $created_at
 * @property int $updated_at
 * @property string $slug
 * @property int $is_deleted
 *
 * @property Invoice $invoice
 */
class InvoicePayment extends \common\extend\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%invoice_payment}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'merchant_name', 'created_at', 'updated_at', 'is_deleted'], 'integer'],
            [['amount_paid'], 'required'],
            [['amount_paid'], 'number'],
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
            'merchant_name' => 'Merchant Name',
            'amount_paid' => 'Amount Paid',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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
