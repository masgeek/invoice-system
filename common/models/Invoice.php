<?php

namespace common\models;

use common\models\base\Invoice as BaseInvoice;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "invoice".
 */
class Invoice extends BaseInvoice
{

    /**
     * @deprecated
     */
    const INVOICE_PAID = 0;
    /**
     * @deprecated
     */
    const INVOICE_PENDING = 1;
    /**
     * @deprecated
     */
    const INVOICE_CANCELLED = 3;
    /**
     * @deprecated
     */
    const INVOICE_DRAFT = 4;


    public function invoiceStatuses()
    {
        $statuses = ArrayHelper::map(InvoiceStatus::find()->asArray()->all(), 'id', 'status');

        return $statuses;
    }

    public function clientStatuses()
    {
        $clientStatus = InvoiceStatus::find()
            ->where(['client_visible' => true])
            ->asArray();
        $statuses = ArrayHelper::map($clientStatus->all(), 'id', 'status');

        $vals = [];
        foreach ($statuses as $key => $values) {
            $vals[] = $key;
        }
        return $vals;
    }

    /**
     * @param array $invoiceItems
     * @return void
     */
    public function computeInvoiceTotal(array $invoiceItems)
    {
        $subtotal = 0.0;
        foreach ($invoiceItems as $index => $invoiceItem) {
            $subtotal = $subtotal + $invoiceItem->item_cost;
        }
        $this->invoice_sub_total = $subtotal;

        $total = $subtotal;
        if ($this->vat_percentage > 0) {
            $total = $subtotal + (($this->vat_percentage / 100) * $subtotal);
        }
        $this->invoice_total = $total;
    }
}
