<?php

namespace common\models\base;

use Yii;

/**
 * This is the base model class for table "{{%invoice_status}}".
 *
 * @property integer $id
 * @property string $status
 * @property string $color
 * @property string $slug
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $updated_by
 * @property integer $created_by
 * @property integer $is_deleted
 * @property integer $client_visible
 *
 * @property \common\models\Invoice[] $invoices
 */
class InvoiceStatus extends \common\extend\models\BaseModel
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['created_at', 'updated_at', 'updated_by', 'created_by', 'is_deleted'], 'integer'],
            [['status', 'slug'], 'string', 'max' => 30],
            [['color'], 'string', 'max' => 15],
            [['client_visible'], 'string', 'max' => 1],
            [['slug'], 'unique']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%invoice_status}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'color' => 'Color',
            'slug' => 'Slug',
            'is_deleted' => 'Is Deleted',
            'client_visible' => 'Client Visible',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(\common\models\Invoice::className(), ['invoice_status_id' => 'id']);
    }
    }
