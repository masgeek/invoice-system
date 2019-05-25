<?php


namespace common\components;


use Exception;
use kun391\paypal\RestAPI;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

class PaypalComponent extends RestAPI
{
    public $pathFileConfig;
    public $configFileName;

    /**
     * PaypalComponent constructor.
     * @param array $config
     * @throws Exception
     */
    public function __construct($config = [])
    {
        parent::__construct($config);

        //set config default for paypal
        if (!$this->pathFileConfig) {
            $this->pathFileConfig = __DIR__ . '/' . $this->configFileName;
        }


        // check file config already exist.
        if (!file_exists($this->pathFileConfig)) {
            throw new Exception('File config does not exist.', 500);
        }

        //$t = \Yii::getAlias('@app/logs');

        //var_dump($t);
        // die;
        //set config file
        /** @noinspection PhpIncludeInspection */
        $this->_credentials = require($this->pathFileConfig);

        if (!in_array($this->_credentials['config']['mode'], ['sandbox', 'live'])) {
            throw new Exception('Error Processing Request', 503);
        }

        return $this->_credentials;
    }

    public function getResult($paymentId)
    {

        $payerId = isset($_GET['PayerID']) ? $_GET['PayerID'] : '0';
        $payment = Payment::get($paymentId, $this->config);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);
        $payment = $payment->execute($execution, $this->config);

        $result = @$payment->toArray();
        return $result;
    }
}