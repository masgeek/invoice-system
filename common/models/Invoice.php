<?php

namespace common\models;

use common\models\base\Invoice as BaseInvoice;

/**
 * This is the model class for table "invoice".
 */
class Invoice extends BaseInvoice
{

    public const INVOICE_PAID = 0;
    public const INVOICE_PENDING = 1;
    public const INVOICE_CANCELLED = 3;
    public const INVOICE_DRAFT = 4;


    public function invoiceStatuses()
    {
        return [
            self::INVOICE_DRAFT => $this->invoiceStatusDescription(self::INVOICE_DRAFT),
            self::INVOICE_PENDING => $this->invoiceStatusDescription(self::INVOICE_PENDING),
            self::INVOICE_PAID => $this->invoiceStatusDescription(self::INVOICE_PAID),
            self::INVOICE_CANCELLED => $this->invoiceStatusDescription(self::INVOICE_CANCELLED),
        ];
    }

    /**
     * @param $status_id
     * @return string
     */
    public function invoiceStatusDescription($status_id)
    {
        switch ($status_id) {
            case self::INVOICE_DRAFT:
                return 'Draft Invoice';
            case self::INVOICE_PENDING:
                return 'Invoice Pending';
            case self::INVOICE_PAID:
                return 'Invoice Paid';
            case self::INVOICE_CANCELLED:
                return 'Invoice Cancelled';
        }
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
            echo $subtotal . "\n";
        }
        $this->invoice_sub_total = $subtotal;

        $total = $subtotal;
        if ($this->vat_percentage > 0) {
            $total = $subtotal + (($this->vat_percentage / 100) * $subtotal);
        }
        $this->invoice_total = $total;
    }
}
