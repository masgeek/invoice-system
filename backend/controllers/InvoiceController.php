<?php

namespace backend\controllers;

use common\extend\BaseWebController;
use common\models\Invoice;
use common\models\InvoiceItem;
use common\models\search\InvoiceSearch;
use Yii;
use yii\data\ArrayDataProvider;
use yii\db\Exception;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * InvoiceController implements the CRUD actions for Invoice model.
 */
class InvoiceController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Invoice models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InvoiceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Invoice model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $providerInvoiceItems = new ArrayDataProvider([
            'allModels' => $model->invoiceItems,
        ]);
        $providerInvoicePayment = new ArrayDataProvider([
            'allModels' => $model->invoicePayments,
        ]);
        $providerPaypalTransaction = new ArrayDataProvider([
            'allModels' => $model->paypalTransactions,
        ]);
        return $this->render('view', [
            'model' => $model,
            'providerInvoiceItems' => $providerInvoiceItems,
            'providerInvoicePayment' => $providerInvoicePayment,
            'providerPaypalTransaction' => $providerPaypalTransaction,
        ]);
    }

    /**
     * Creates a new Invoice model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Invoice();
        $invoiceItems = [new InvoiceItem];
        if ($model->load(Yii::$app->request->post())) {
            $invoiceItems = InvoiceItem::createMultiple(InvoiceItem::class);
            InvoiceItem::loadMultiple($invoiceItems, Yii::$app->request->post());

            // ajax validation
            /*if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($invoiceItems),
                    ActiveForm::validate($model)
                );
            }*/
            // validate all models
            $valid = $model->validate();
            if ($valid) {
                $transaction = Yii::$app->db->beginTransaction();
                try {
                    $model->computeInvoiceTotal($invoiceItems);
                    if ($flag = $model->save()) {
                        foreach ($invoiceItems as $invoiceItem) {
                            /* @var $invoiceItem InvoiceItem */
                            $invoiceItem->invoice_id = $model->id;
                            if (!($flag = $invoiceItem->save())) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        //let us compute the invoice totals and stuff
                        $transaction->commit();
                        Yii::$app->session->setFlash('success', 'Invoice created successfully');
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
            Yii::$app->session->setFlash('error', 'Unable to create the invoice');
        }
        return $this->render('create', [
            'model' => $model,
            'invoiceItems' => $invoiceItems
        ]);

    }

    /**
     * Updates an existing Invoice model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws Exception
     * @throws NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $invoiceItems = $model->invoiceItems;

        if ($model->load(Yii::$app->request->post())) {
            $oldIDs = ArrayHelper::map($invoiceItems, 'id', 'id');
            $invoiceItems = InvoiceItem::createMultiple(InvoiceItem::class, $invoiceItems);
            InvoiceItem::loadMultiple($invoiceItems, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($invoiceItems, 'id', 'id')));

            $valid = $model->validate();

            if ($valid) {
                $transaction = Yii::$app->db->beginTransaction();
                try {
                    if (!empty($deletedIDs)) {
                        InvoiceItem::deleteAll(['id' => $deletedIDs]);
                    }
                    $model->computeInvoiceTotal($invoiceItems);
                    if ($flag = $model->save()) {
                        foreach ($invoiceItems as $invoiceItem) {
                            /* @var $invoiceItem InvoiceItem */
                            $invoiceItem->invoice_id = $model->id;
                            if (!($flag = $invoiceItem->save())) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        Yii::$app->session->setFlash('success', 'Invoice updated successfully');
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    Yii::$app->session->setFlash('error', 'Unable to update the invoice');
                    $transaction->rollBack();
                }
            }
        }
        return $this->render('update', [
            'model' => $model,
            'invoiceItems' => (empty($invoiceItems)) ? [new InvoiceItem()] : $invoiceItems
        ]);

    }

    /**
     * Deletes an existing Invoice model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithRelated();

        return $this->redirect(['index']);
    }


    /**
     * Finds the Invoice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Invoice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Invoice::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for InvoiceItem
     * @return mixed
     * @throws NotFoundHttpException
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     */
    public function actionAddInvoiceItems()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('InvoiceItem');
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formInvoiceItems', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
