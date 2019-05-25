<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%paypal_transaction}}".
 *
 * @property int $id
 * @property string $payment_id
 * @property int $invoice_id
 * @property string $payment_token
 * @property double $amount_paid
 * @property string $payment_status
 * @property string $description
 * @property string $slug
 * @property int $created_at
 * @property int $updated_at
 * @property int $updated_by
 * @property int $created_by
 * @property int $is_deleted
 *
 * @property Invoice $invoice
 */
class PaypalTransaction extends \common\extend\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%paypal_transaction}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id', 'invoice_id', 'amount_paid', 'payment_status'], 'required'],
            [['invoice_id', 'created_at', 'updated_at', 'updated_by', 'created_by', 'is_deleted'], 'integer'],
            [['amount_paid'], 'number'],
            [['description'], 'string'],
            [['payment_id'], 'string', 'max' => 65],
            [['payment_token'], 'string', 'max' => 255],
            [['payment_status'], 'string', 'max' => 20],
            [['slug'], 'string', 'max' => 30],
            [['payment_id'], 'unique'],
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
            'payment_id' => 'Payment ID',
            'invoice_id' => 'Invoice ID',
            'payment_token' => 'Payment Token',
            'amount_paid' => 'Amount Paid',
            'payment_status' => 'Payment Status',
            'description' => 'Description',
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
    public function getInvoice()
    {
        return $this->hasOne(Invoice::className(), ['id' => 'invoice_id']);
    }
}
