<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "{{%paypal_transaction}}".
 *
 * @property integer $id
 * @property string $payment_id
 * @property integer $invoice_id
 * @property string $payment_token
 * @property double $amount_paid
 * @property string $payment_status
 * @property string $description
 * @property string $slug
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $created_by
 * @property integer $is_deleted
 *
 * @property \common\models\Invoice $invoice
 */
class PaypalTransaction extends \common\extend\models\BaseModel
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payment_id', 'invoice_id', 'amount_paid', 'payment_status'], 'required'],
            [['invoice_id', 'created_at', 'updated_at', 'updated_by', 'created_by'], 'integer'],
            [['amount_paid'], 'number'],
            [['description'], 'string'],
            [['payment_id'], 'string', 'max' => 65],
            [['payment_token'], 'string', 'max' => 255],
            [['payment_status'], 'string', 'max' => 20],
            [['slug'], 'string', 'max' => 30],
            [['is_deleted'], 'string', 'max' => 1],
            [['payment_id'], 'unique'],
            [['slug'], 'unique']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%paypal_transaction}}';
    }

    /**
     * @inheritdoc
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
            'is_deleted' => 'Is Deleted',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoice()
    {
        return $this->hasOne(\common\models\Invoice::className(), ['id' => 'invoice_id']);
    }
    }
