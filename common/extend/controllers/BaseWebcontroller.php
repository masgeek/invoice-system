<?php
/** @noinspection PhpUndefinedFieldInspection */

namespace common\extend\controllers;

use common\components\PaypalComponent;
use common\models\Invoice;
use common\models\PaypalTransaction;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\Exception;
use yii\base\InvalidArgumentException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class BaseWebController extends Controller
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
                        'actions' => ['logout', 'index', 'create', 'view', 'update', 'invoice','delete'],
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
     * @param $invoice_id
     * @return int
     */
    public function actionPaypal($invoice_id)
    {
        //$invoiceModel =$this->findInvoiceModel($invoice_id);

        $paypalTransactionModel = new PaypalTransaction();
        /* @var $paypalRest PaypalComponent */
        $paypalRest = Yii::$app->payPalRest;
        $params = [
            'currency' => 'USD', // only support currency same PayPal
            'description' => 'Buy some item',
            'total_price' => 5000,
            'email' => 'sandbox@tsobu.co.ke',
            'items' => [
                [
                    'name' => 'Pepsi',
                    'quantity' => 5,
                    'price' => 1000
                ]
            ]
        ];

        $response = (object)$paypalRest->getLinkCheckOut($params);
        $checkoutUrl = $response->redirect_url;
        $status = $response->status;
        $description = $response->description;
        $payment_id = $response->payment_id;


        $paypalTransactionModel->invoice_id = 1;
        $paypalTransactionModel->payment_id = $payment_id;
        $paypalTransactionModel->payment_status = $status;
        $paypalTransactionModel->description = $description;
        $paypalTransactionModel->amount_paid = 6000;

        if ($paypalTransactionModel->validate()) {
            if ($paypalTransactionModel->validate() && $paypalTransactionModel->save()) {
                return 8;
            }
        }
        var_dump($paypalTransactionModel->getErrors());

        return 7;
        ///return $this->redirect($checkoutUrl);
    }

    public function actionPaypalSuccess()
    {
        $this->view->title = 'Invoice Payment Successful';
        /* @var $paypalRest PaypalComponent */
        $paypalRest = Yii::$app->payPalRest;

        $paymentId = Yii::$app->request->get('paymentId');
        $response = $paypalRest->getResult($paymentId);

        var_dump($response);

        Yii::$app->session->setFlash('success', 'Your payment is successful');
        /** @noinspection MissedViewInspection */
        return $this->render('@common/extend/views/paypal/payment-successful');
    }

    public function actionPaypalCancel()
    {
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
    private function findInvoiceModel($invoice_id)
    {
        if (($model = Invoice::findOne($invoice_id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested invoice does not exist');
        }
    }
}