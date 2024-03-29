<div class="form-group" id="add-invoice">
<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\Pjax;

$dataProvider = new ArrayDataProvider([
    'allModels' => $row,
    'pagination' => [
        'pageSize' => -1
    ]
]);
echo TabularForm::widget([
    'dataProvider' => $dataProvider,
    'formName' => 'Invoice',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'id' => ['type' => TabularForm::INPUT_HIDDEN, 'visible' => false],
        'vat_percentage' => ['type' => TabularForm::INPUT_TEXT],
        'invoice_sub_total' => ['type' => TabularForm::INPUT_TEXT],
        'invoice_total' => ['type' => TabularForm::INPUT_TEXT],
        'invoice_status' => ['type' => TabularForm::INPUT_TEXT],
        'invoice_due_date' => ['type' => TabularForm::INPUT_TEXT],
        'slug' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowInvoice(' . $key . '); return false;', 'id' => 'invoice-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Invoice', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowInvoice()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

