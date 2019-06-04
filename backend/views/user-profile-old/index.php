<?php

use common\models\User;
use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\UserProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Profiles';
$this->params['breadcrumbs'][] = $this->title;

$gridColumn = [
    ['class' => 'yii\grid\SerialColumn'],
    [
        'attribute' => 'user_id',
        'label' => 'User',
        'value' => function ($model) {
            return $model->user->username;
        },
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => User::getAllUsers(),
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => 'User', 'id' => 'grid--user_id']
    ],
    //'user.email:email',
    'company_name',
    'surname',
    'first_name',
    'last_name',
    'phone_number',
    'address:ntext',
    'notes:ntext',
    'country_code',
    [
        'class' => 'yii\grid\ActionColumn',
    ],
];
?>
<div class="user-profile-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn,
    ]); ?>


</div>
