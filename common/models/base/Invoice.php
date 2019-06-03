<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "{{%invoice}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property double $vat_percentage
 * @property double $invoice_sub_total
 * @property double $invoice_total
 * @property integer $invoice_status_id
 * @property string $invoice_due_date
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $created_by
 * @property string $slug
 * @property integer $is_deleted
 *
 * @property \common\models\User $user
 * @property \common\models\InvoiceStatus $invoiceStatus
 * @property \common\models\InvoiceItem[] $invoiceItems
 * @property \common\models\InvoicePayment[] $invoicePayments
 * @property \common\models\PaypalTransaction[] $paypalTransactions
 */
class Invoice extends \common\extend\models\BaseModel
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'invoice_due_date'], 'required'],
            [['user_id', 'invoice_status_id', 'created_at', 'updated_at', 'updated_by', 'created_by'], 'integer'],
            [['vat_percentage', 'invoice_sub_total', 'invoice_total'], 'number'],
            [['invoice_due_date'], 'safe'],
            [['slug'], 'string', 'max' => 30],
            [['is_deleted'], 'string', 'max' => 1],
            [['slug'], 'unique']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%invoice}}';
    }

    /**
     * @inheritdoc
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
            'slug' => 'Slug',
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
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceStatus()
    {
        return $this->hasOne(\common\models\InvoiceStatus::className(), ['id' => 'invoice_status_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceItems()
    {
        return $this->hasMany(\common\models\InvoiceItem::className(), ['invoice_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoicePayments()
    {
        return $this->hasMany(\common\models\InvoicePayment::className(), ['invoice_id' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaypalTransactions()
    {
        return $this->hasMany(\common\models\PaypalTransaction::className(), ['invoice_id' => 'id']);
    }
    }
