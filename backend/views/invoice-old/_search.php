<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\InvoiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-invoice-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'user_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
        'options' => ['placeholder' => 'Choose User'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'vat_percentage')->textInput(['placeholder' => 'Vat Percentage']) ?>

    <?= $form->field($model, 'invoice_sub_total')->textInput(['placeholder' => 'Invoice Sub Total']) ?>

    <?= $form->field($model, 'invoice_total')->textInput(['placeholder' => 'Invoice Total']) ?>

    <?php /* echo $form->field($model, 'invoice_status')->textInput(['maxlength' => true, 'placeholder' => 'Invoice Status']) */ ?>

    <?php /* echo $form->field($model, 'invoice_due_date')->textInput(['placeholder' => 'Invoice Due Date']) */ ?>

    <?php /* echo $form->field($model, 'slug')->textInput(['maxlength' => true, 'placeholder' => 'Slug']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
