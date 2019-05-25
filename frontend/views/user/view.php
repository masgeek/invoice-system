<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'User'.' '. Html::encode($this->title) ?></h2>
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
        'id',
        'username',
        'auth_key',
        'password_hash',
        'password_reset_token',
        'email:email',
        'status',
        'verification_token',
        'slug',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
if($providerInvoice->totalCount){
    $gridColumnInvoice = [
        ['class' => 'yii\grid\SerialColumn'],
            'id',
                        'vat_percentage',
            'invoice_sub_total',
            'invoice_total',
            'invoice_status',
            'invoice_due_date',
            'slug',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerInvoice,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-invoice']],
        'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Invoice'),
        ],
        'columns' => $gridColumnInvoice
    ]);
}
?>
    </div>
    
    <div class="row">
<?php
if($providerUserProfile->totalCount){
    $gridColumnUserProfile = [
        ['class' => 'yii\grid\SerialColumn'],
            'id',
                        'company_name',
            'surname',
            'first_name',
            'last_name',
            'phone_number',
            'address:ntext',
            'notes:ntext',
            'slug',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerUserProfile,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-user-profile']],
        'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('User Profile'),
        ],
        'columns' => $gridColumnUserProfile
    ]);
}
?>
    </div>
</div>