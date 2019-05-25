<?php
/** @noinspection PhpUnhandledExceptionInspection */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UserProfile */

$this->title = $model->user->username . " profile";
$this->params['breadcrumbs'][] = ['label' => 'User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$gridColumn = [
    ['attribute' => 'id', 'visible' => false],
    [
        'attribute' => 'user.username',
        'label' => 'User',
    ],
    'surname',
    'first_name',
    'last_name',
    'company_name',
    'country_code',
    'phone_number',
    'address:ntext',
    'notes:ntext'
];
?>
<div class="user-profile-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary pull-right']) ?>
        </div>
    </div>

    <div class="row">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => $gridColumn,
        ]) ?>

    </div>
