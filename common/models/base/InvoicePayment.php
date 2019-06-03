<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "{{%invoice_payment}}".
 *
 * @property integer $id
 * @property integer $invoice_id
 * @property integer $merchant_name
 * @property double $amount_paid
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $slug
 * @property integer $is_deleted
 *
 * @property \common\models\Invoice $invoice
 */
class InvoicePayment extends \common\extend\models\BaseModel
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['invoice_id', 'merchant_name', 'created_at', 'updated_at'], 'integer'],
            [['amount_paid'], 'required'],
            [['amount_paid'], 'number'],
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
        return '{{%invoice_payment}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'invoice_id' => 'Invoice ID',
            'merchant_name' => 'Merchant Name',
            'amount_paid' => 'Amount Paid',
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
