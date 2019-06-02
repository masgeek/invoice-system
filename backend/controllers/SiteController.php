<?php

namespace backend\controllers;

use common\extend\BaseWebController;
use common\models\LoginForm;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends BaseWebController
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        //return $this->render('index');
        return $this->render('theme-test');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
       //$this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        $model->password = null;
        return $this->render('login', [
            'model' => $model,
        ]);

    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
