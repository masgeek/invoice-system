<?php


namespace frontend\controllers;


use common\components\PaypalComponent;
use common\extend\controllers\WebController;
use common\models\Invoice;
use common\models\PaypalTransaction;
use common\models\search\InvoiceSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class InvoiceController extends WebController
{
    /**
     * Lists all Invoice models for the logged in user.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->view->title = 'My Invoices';
        $searchModel = new InvoiceSearch();

        $searchModel->user_id = Yii::$app->user->identity->id;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @param $id
     * @return string|void
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        //$this->layout = 'invoice';
        $invoice = self::findInvoiceModel($id);

        $this->view->title = 'My Invoice';
        return $this->render('invoice', [
            'model' => $invoice
        ]);
    }

    /**
     * @param $id
     * @return int
     * @throws NotFoundHttpException
     */
    public function actionPaypalCheckout($id)
    {
        $model = $this->findInvoiceModel($id);

        $paypalTransactionModel = new PaypalTransaction();
        /* @var $paypalRest PaypalComponent */
        $paypalRest = Yii::$app->payPalRest;

        $invoiceItems = $model->invoiceItems;
        $items = [];

        $items[] = [
            'name' => 'Carlshah taxi payment',//$model->item_description,
            'quantity' => 1,
            'price' => $model->invoice_total
        ];
        /*foreach ($invoiceItems as $key => $invoiceItem) {
            $items[] = [
                'name' => $invoiceItem->item_description,
                'quantity' => 1,
                'price' => $invoiceItem->item_cost
            ];
        }*/
        $params = [
            'currency' => 'USD', // only support currency same PayPal
            'description' => 'Taxi services payment',
            'total_price' => $model->invoice_total,
            'email' => $model->user->email,
            'items' => $items
        ];


        $response = (object)$paypalRest->getLinkCheckOut($params);
        $checkoutUrl = $response->redirect_url;

        //var_dump($params);
        //return $checkoutUrl;
        $status = $response->status;
        $description = $response->description;
        $payment_id = $response->payment_id;


        $paypalTransactionModel->invoice_id = $model->id;
        $paypalTransactionModel->payment_id = $payment_id;
        $paypalTransactionModel->payment_status = $status;
        $paypalTransactionModel->description = $description;
        $paypalTransactionModel->amount_paid = $model->invoice_total;

        if ($paypalTransactionModel->validate()) {
            if ($paypalTransactionModel->validate() && $paypalTransactionModel->save()) {
                return $this->redirect($checkoutUrl);
            }
        }
        //var_dump($paypalTransactionModel->getErrors());
        return Yii::$app->homeUrl;
    }

    public function actionPaypalSuccess()
    {
        $this->layout = 'main';
        $this->view->title = 'Invoice Payment Successful';
        /* @var $paypalRest PaypalComponent */
        $paypalRest = Yii::$app->payPalRest;

        $paymentId = Yii::$app->request->get('paymentId');
        $response = $paypalRest->getResult($paymentId);

        Yii::$app->session->setFlash('success', 'Your payment is successful');
        /** @noinspection MissedViewInspection */
        return $this->render('@common/extend/views/paypal/payment-successful');
    }

    public function actionPaypalCancel()
    {
        $this->layout = 'main';
        $this->view->title = 'Invoice Payment cancelled';
        /* @var $paypalRest PaypalComponent */
        Yii::$app->session->setFlash('error', 'Your have cancelled this payment');
        /** @noinspection MissedViewInspection */
        return $this->render('@common/extend/views/paypal/payment-cancelled');
    }

    /**
     * @param $invoice_id
     * @return Invoice|null
     * @throws NotFoundHttpException
     */
    public function findInvoiceModel($invoice_id)
    {
        if (($model = Invoice::findOne($invoice_id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested invoice does not exist');
        }
    }
}