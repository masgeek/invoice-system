<?php

/** @noinspection PhpUnhandledExceptionInspection */

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\InvoiceSearch */

/* @var $dataProvider yii\data\ActiveDataProvider */

use kartik\grid\GridView;
use yii\helpers\Html;

$this->params['breadcrumbs'][] = $this->title;

$gridColumn = [
    ['class' => 'yii\grid\SerialColumn'],
    ['attribute' => 'id', 'visible' => false],
    [
        'attribute' => 'user_id',
        'label' => 'User',
        'value' => function ($model) {
            return $model->user->username;
        },
        'visible' => false
    ],
    'invoice_sub_total:Currency',
    'vat_percentage:Decimal',
    'invoice_total:Currency',
    [
        'attribute' => 'invoice_status_id',
        'label' => 'Invoice Status',
        'value' => function ($model) {
            /* @var $model \common\models\Invoice */
            return $model->invoiceStatus->status;
        },
    ],
    'invoice_due_date:Date',
    #'slug',
    #'is_deleted',
    [
        'class' => 'yii\grid\ActionColumn',
        'template' => '{view}'
    ],
];
?>
<div class="invoice-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => $gridColumn,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
        ],
    ]); ?>

</div>
