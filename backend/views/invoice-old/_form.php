<?php
/** @noinspection PhpUnhandledExceptionInspection */

use common\models\User;
use kartik\date\DatePicker;
use kartik\datecontrol\DateControl;
use kartik\widgets\Select2;
use mootensai\components\JsBlock;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Invoice */
/* @var $form yii\widgets\ActiveForm */

JsBlock::widget(['viewFile' => '_script', 'pos' => View::POS_END,
    'viewParams' => [
        'class' => 'InvoiceItem',
        'relID' => 'invoice-items',
        'value' => Json::encode($model->invoiceItems),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);

?>

<div class="invoice-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'user_id')->widget(Select2::class, [
        'data' => User::getAllUsers(),
        'options' => ['placeholder' => 'Choose User'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'vat_percentage')->textInput(['placeholder' => 'Vat Percentage']) ?>

    <?= $form->field($model, 'invoice_sub_total')->textInput(['placeholder' => 'Invoice Sub Total']) ?>

    <?= $form->field($model, 'invoice_total')->textInput(['placeholder' => 'Invoice Total']) ?>

    <?= $form->field($model, 'invoice_status')->widget(Select2::class, [
        'data' => $model->invoiceStatuses(),
        'options' => ['placeholder' => 'Select invoice status...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'invoice_due_date')->widget(DateControl::class, [
        'type' => DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Invoice Due Date',
                'autoclose' => true
            ]
        ],
    ]); ?>


    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('InvoiceItem'),
            'content' => $this->render('_formInvoiceItems', [
                'row' => ArrayHelper::toArray($model->invoiceItems),
            ]),
        ],
    ];
    echo kartik\tabs\TabsX::widget([
        'items' => $forms,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
