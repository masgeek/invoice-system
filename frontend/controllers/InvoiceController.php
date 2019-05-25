<?php


namespace frontend\controllers;


use common\extend\BaseWebController;
use common\models\search\InvoiceSearch;
use Yii;
use yii\web\Controller;

class InvoiceController extends Controller
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
}