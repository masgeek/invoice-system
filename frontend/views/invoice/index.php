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
    'invoice_sub_total:Currency',
    'vat_percentage',
    'invoice_total:Currency',
    'invoice_status',
    'invoice_due_date:Date',
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
    ]); ?>

</div>
