<?php /** @noinspection PhpUnhandledExceptionInspection */

use kartik\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Invoice */
/** @var $providerInvoiceItems ActiveDataProvider */
/** @var $providerInvoicePayment ActiveDataProvider */
/** @var $providerPaypalTransaction ActiveDataProvider */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Invoice', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invoice-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Invoice' . ' ' . Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">

            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
        <?php
        $gridColumn = [
            ['attribute' => 'id', 'visible' => false],
            [
                'attribute' => 'user.username',
                'label' => 'User',
            ],
            'vat_percentage',
            'invoice_sub_total:currency',
            'invoice_total:currency',
            'invoice_status',
            'invoice_due_date',
        ];
        echo DetailView::widget([
            'model' => $model,
            'attributes' => $gridColumn
        ]);
        ?>
    </div>

    <div class="row">
        <?php
        if ($providerInvoiceItems->totalCount) {
            $gridColumnInvoiceItems = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                'item_description:ntext',
                'item_cost:Currency',
                //'slug',
            ];
            echo Gridview::widget([
                'dataProvider' => $providerInvoiceItems,
                'pjax' => true,
                'export' => false,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-invoice-items']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Invoice Items'),
                ],
                'columns' => $gridColumnInvoiceItems
            ]);
        }
        ?>
    </div>

    <div class="row">
        <?php
        if ($providerInvoicePayment->totalCount) {
            $gridColumnInvoicePayment = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                'merchant_name',
                'amount_paid:Currency',
               // 'slug',
            ];
            echo Gridview::widget([
                'dataProvider' => $providerInvoicePayment,
                'pjax' => true,
                'export' => false,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-invoice-payment']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Invoice Payment'),
                ],
                'columns' => $gridColumnInvoicePayment
            ]);
        }
        ?>
    </div>

    <div class="row">
        <?php
        if ($providerPaypalTransaction->totalCount) {
            $gridColumnPaypalTransaction = [
                ['class' => 'yii\grid\SerialColumn'],
                ['attribute' => 'id', 'visible' => false],
                //'payment_id',
                'payment_token',
                'amount_paid:Currency',
                'payment_status',
                'description:ntext',
               // 'slug',
            ];
            echo Gridview::widget([
                'dataProvider' => $providerPaypalTransaction,
                'pjax' => true,
                'export' => false,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-paypal-transaction']],
                'panel' => [
                    'type' => GridView::TYPE_INFO,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Paypal Transaction'),
                ],
                'columns' => $gridColumnPaypalTransaction
            ]);
        }
        ?>
    </div>
</div>