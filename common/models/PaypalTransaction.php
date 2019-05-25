<?php

namespace common\models;

use common\models\base\PaypalTransaction as BasePaypalTransaction;

/**
 * This is the model class for table "paypal_transaction".
 */
class PaypalTransaction extends BasePaypalTransaction
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['slug']['attribute'] = 'payment_id';

        return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
            [
                [['payment_id', 'invoice_id', 'amount_paid', 'payment_status'], 'required'],
                [['invoice_id', 'created_at', 'updated_at'], 'integer'],
                [['amount_paid'], 'number'],
                [['description'], 'string'],
                [['payment_id'], 'string', 'max' => 65],
                [['payment_token', 'updated_by', 'created_by'], 'string', 'max' => 255],
                [['payment_status'], 'string', 'max' => 20],
                [['slug'], 'string', 'max' => 30],
                [['payment_id'], 'unique'],
                [['slug'], 'unique']
            ]);
    }

}
