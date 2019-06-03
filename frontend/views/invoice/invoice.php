<?php

/* @var $this View */

use common\models\Invoice;
use yii\web\View;

/* @var $model null|Invoice */

$this->params['breadcrumbs'][] = ['label' => 'Invoice', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$names = "{$model->user->userProfile->surname}, {$model->user->userProfile->first_name}";
$email = $model->user->email;
$phone = $model->user->userProfile->phone_number;
$address = $model->user->userProfile->address;
$company = $model->user->userProfile->company_name;

$subTotal = $model->invoice_sub_total;
$total = $model->invoice_total;
$vatAmount = $model->invoice_total - $model->invoice_sub_total;
$invoiceItems = $model->invoiceItems;


$paypalCheckoutUrl = \yii\helpers\Url::to(['paypal-checkout', 'id' => $model->id]);

$paidStatus = $model->clientStatuses();
//$pendingStatus = $model->clientStatuses();
?>

<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
                <i class="fa fa-globe"></i> <?= $company ?>.
                <small class="pull-right">Date: <?= $model->invoice_due_date ?></small>
            </h2>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            From
            <address>
                <strong>CarlShah INC</strong><br>
                WEstlands road<br>
                Nairobi Kenya<br>
                Phone: 12435345<br>
                Email: info@acarlshah.org
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            To
            <address>
                <strong><?= $names ?>.</strong><br>
                <?= $address ?><br>
                Phone: <?= $phone ?><br>
                Email: <?= $email ?>
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Invoice #<?= $model->id ?></b><br>
            <b>Order ID:</b> <?= $model->id ?><br>
            <b>Payment Due:</b> <?= $model->invoice_due_date ?><br>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Qty</th>
                    <th>Product</th>
                    <th>Description</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($invoiceItems as $key => $invoiceItem): ?>
                    <tr>
                        <td>1</td>
                        <td><?= $invoiceItem->item_description ?></td>
                        <td><?= $invoiceItem->item_description ?></td>
                        <td><?= $invoiceItem->item_cost ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
            <p class="lead">Payment Methods:</p>
            <img src="/img/credit/paypal2.png" alt="Paypal">
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Pay securely with paypal using your credit card
            </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
            <p class="lead">Amount Due <?= $model->invoice_due_date ?></p>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td><?= $subTotal ?></td>
                    </tr>
                    <tr>
                        <th>V.A.T (<?= $model->vat_percentage ?>%)</th>
                        <td><?= $vatAmount ?></td>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td><?= $total ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-xs-12">
            <a href="invoice-print.html" target="_blank" class="btn btn-default invisible">
                <i class="fa fa-print"></i> Print
            </a>
            <?php if (in_array($model->invoice_status_id, $paidStatus)): ?>
                <a href="<?= $paypalCheckoutUrl ?>" class="btn btn-success pull-right">
                    <i class="fa fa-credit-card"></i> Submit Payment
                </a>
            <?php else: ?>
                <button type="button" class="btn btn-danger pull-right disabled">
                    <i class="fa fa-ban"></i> <?= $model->invoiceStatus->status ?>
                </button>
            <?php endif; ?>
            <button type="button" class="btn btn-primary pull-right invisible" style="margin-right: 5px;">
                <i class="fa fa-download"></i> Generate PDF
            </button>
        </div>
    </div>
</section>
