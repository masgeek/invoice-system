<?php
/** @noinspection PhpUndefinedFieldInspection */

namespace common\extend\controllers;

use common\components\PaypalComponent;
use common\models\Invoice;
use common\models\PaypalTransaction;
use frontend\models\SignupForm;
use Yii;
use yii\base\Exception;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class WebController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'recover', 'sign-up', 'request-password-reset', 'resend-verification-email'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'create', 'view', 'update', 'invoice', 'delete', 'paypal-checkout', 'paypal-success', 'paypal-cancel'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * @throws Exception
     */
    public function actionIndex()
    {
        throw new Exception('This action is not implemented yet');
    }

    /**
     * @throws Exception
     */
    public function actionView($id)
    {
        throw new Exception('This action is not implemented yet');
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * @param $id
     * @return mixed|string|\yii\web\Response
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