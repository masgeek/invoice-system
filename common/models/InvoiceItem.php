<?php

namespace common\models;

use common\models\base\InvoiceItem as BaseInvoiceItem;

/**
 * This is the model class for table "invoice_items".
 */
class InvoiceItem extends BaseInvoiceItem
{
    public function rules()
    {
        $rules = parent::rules();

        return $rules;
    }

}
