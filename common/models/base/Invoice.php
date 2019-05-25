<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%invoice}}".
 *
 * @property int $id
 * @property int $user_id
 * @property double $vat_percentage
 * @property double $invoice_sub_total
 * @property double $invoice_total
 * @property int $invoice_status_id
 * @property string $invoice_due_date
 * @property int $created_at
 * @property int $updated_at
 * @property int $updated_by
 * @property int $created_by
 * @property string $slug
 * @property int $is_deleted
 *
 * @property User $user
 * @property InvoiceStatus $invoiceStatus
 * @property InvoiceItem[] $invoiceItems
 * @property InvoicePayment[] $invoicePayments
 * @property PaypalTransaction[] $paypalTransactions
 */
class Invoice extends \common\extend\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%invoice}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'invoice_due_date'], 'required'],
            [['user_id', 'invoice_status_id', 'created_at', 'updated_at', 'updated_by', 'created_by', 'is_deleted'], 'integer'],
            [['vat_percentage', 'invoice_sub_total', 'invoice_total'], 'number'],
            [['invoice_due_date'], 'safe'],
            [['slug'], 'string', 'max' => 30],
            [['slug'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['invoice_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => InvoiceStatus::className(), 'targetAttribute' => ['invoice_status_id' => 'id']],
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
            'vat_percentage' => 'Vat Percentage',
            'invoice_sub_total' => 'Invoice Sub Total',
            'invoice_total' => 'Invoice Total',
            'invoice_status_id' => 'Invoice Status ID',
            'invoice_due_date' => 'Invoice Due Date',
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceStatus()
    {
        return $this->hasOne(InvoiceStatus::className(), ['id' => 'invoice_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceItems()
    {
        return $this->hasMany(InvoiceItem::className(), ['invoice_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoicePayments()
    {
        return $this->hasMany(InvoicePayment::className(), ['invoice_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaypalTransactions()
    {
        return $this->hasMany(PaypalTransaction::className(), ['invoice_id' => 'id']);
    }
}
