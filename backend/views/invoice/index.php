<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\InvoiceSearch */

/* @var $dataProvider yii\data\ActiveDataProvider */

use common\models\InvoiceStatus;
use common\models\User;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$this->title = 'Invoice';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="invoice-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Invoice', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
        [
            'attribute' => 'user_id',
            'label' => 'User',
            'value' => function ($model) {
                return $model->user->username;
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => User::getAllUsers(),
            'filterInputOptions' => ['placeholder' => 'User', 'id' => 'grid-invoice-search-user_id']
        ],
        [
            'attribute' => 'vat_percentage',
            'filter' => false,
        ],
        'invoice_sub_total',
        'invoice_total:Currency',
        [
            'attribute' => 'invoice_status_id',
            'label' => 'Invoice Status',
            'value' => function($model){
                return $model->invoiceStatus->id;
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => ArrayHelper::map(InvoiceStatus::find()->asArray()->all(), 'id', 'id'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Invoice status', 'id' => 'grid--invoice_status_id']
        ],
        'invoice_due_date:Date',
        [
            'class' => 'kartik\grid\ActionColumn',
            'template' => '{view} {update}'
        ],
    ];
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => $gridColumn,
        'pjax' => false,
        //'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-invoice']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
        ],
        'export' => false,
    ]); ?>

</div>
