<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserProfile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => $model->newUserAccounts($model->isNewRecord),
        'options' => ['placeholder' => 'Choose User'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'country_code')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-8">
            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 3]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
