<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "{{%invoice_item}}".
 *
 * @property integer $id
 * @property integer $invoice_id
 * @property string $item_description
 * @property double $item_cost
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $created_by
 * @property string $slug
 * @property integer $is_deleted
 *
 * @property \common\models\Invoice $invoice
 */
class InvoiceItem extends \common\extend\models\BaseModel
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['invoice_id', 'item_cost'], 'required'],
            [['invoice_id', 'created_at', 'updated_at', 'updated_by', 'created_by', 'is_deleted'], 'integer'],
            [['item_description'], 'string'],
            [['item_cost'], 'number'],
            [['slug'], 'string', 'max' => 30],
            [['slug'], 'unique']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%invoice_item}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'invoice_id' => 'Invoice ID',
            'item_description' => 'Item Description',
            'item_cost' => 'Item Cost',
            'slug' => 'Slug',
            'is_deleted' => 'Is Deleted',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoice()
    {
        return $this->hasOne(\common\models\Invoice::className(), ['id' => 'invoice_id']);
    }
    }
