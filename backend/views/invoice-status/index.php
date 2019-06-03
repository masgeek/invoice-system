<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Invoice Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invoice-status-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Invoice Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'status',
            'color',
            'slug',
            'created_at',
            //'updated_at',
            //'updated_by',
            //'created_by',
            'is_deleted:Boolean',
            'client_visible:Boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode($this->title),
        ],
    ]); ?>


</div>
