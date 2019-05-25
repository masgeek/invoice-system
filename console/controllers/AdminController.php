<?php

namespace console\controllers;

use common\models\User;
use yii\base\Exception;
use yii\console\Controller;
use yii\console\ExitCode;
use yii\helpers\Console;

class AdminController extends Controller
{
    //livdb
    //User “carlshah_inv” was added to the database “carlshah_invoice”.
    // %(oUXzXlTleY
    /**
     * @return int
     * @throws Exception
     */
    public function actionIndex()
    {
        $user = new User();

        $user->username = 'admin';
        $user->email = 'admin@carlshah.org';
        $user->status = User::STATUS_ACTIVE;
        $password = "carlshah2019";
        $user->password = $password;
        $user->confirm_password = $password;
        $user->setCredentials();
        $user->user_type = User::USER_ADMIN;

        if (!$user->validate()) {
            $errors = $user->getErrors();
            $errorMessage = $this->ansiFormat("Please correct the following errors", Console::FG_RED);
            echo "$errorMessage \n";
            foreach ($errors as $key => $value) {
                $error = $this->ansiFormat($value[0], Console::FG_CYAN);
                echo "$error \n";
            }
            return ExitCode::DATAERR;
        }

        if ($user->save()) {
            $this->stdout("Admin user {$user->username} created successfully. Password is {$password} \n", Console::FG_GREEN);
            return ExitCode::OK;
        }
        return ExitCode::UNSPECIFIED_ERROR;
    }
}