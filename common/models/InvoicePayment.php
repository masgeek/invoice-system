<?php

namespace common\models;

use \common\models\base\InvoicePayment as BaseInvoicePayment;

/**
 * This is the model class for table "invoice_payment".
 */
class InvoicePayment extends BaseInvoicePayment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['invoice_id', 'merchant_name', 'created_at', 'updated_at'], 'integer'],
            [['amount_paid'], 'required'],
            [['amount_paid'], 'number'],
            [['slug'], 'string', 'max' => 30],
            [['slug'], 'unique']
        ]);
    }
	
}
