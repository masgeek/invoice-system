<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\InvoiceSearch */

/* @var $dataProvider yii\data\ActiveDataProvider */

use common\models\User;
use kartik\grid\GridView;
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
        'invoice_status',
        'invoice_due_date:Date',
        [
            'class' => 'kartik\grid\ActionColumn',
            'template' => '{view} {update}'
        ],
    ];
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn
    ]); ?>

</div>
