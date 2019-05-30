<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

$template = '<div class="form-group form-primary">{input}
   <span class="form-bar"></span>
   <label class="float-label">{label}</label>
   {error}
</div>';
?>
<div class="row">
    <div class="col-sm-12">
        <!-- Authentication card start -->
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'fieldConfig' => [
                'template' => $template,
                'options' => ['class' => 'form-group form-primary']],
            'options' => [
                'class' => 'md-float-material form-material'
            ]
        ]); ?>

        <div class="text-center">
            <img src="../files/assets/images/logo.png" alt="logo.png">
        </div>
        <div class="auth-box card">
            <div class="card-block">
                <div class="row m-b-20">
                    <div class="col-md-12">
                        <h3 class="text-center">Sign In</h3>
                    </div>
                </div>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Your username'])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password', ])->label(false) ?>

                <!--<div class="form-group form-primary">
                    <input type="text" name="email" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Your Email Address</label>
                </div>
                -->
                <div class="form-group form-primary">
                    <input type="password" name="password" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Password</label>
                </div>
                <div class="row m-t-25 text-left">
                    <div class="col-12">
                        <div class="checkbox-fade fade-in-primary d-">
                            <label>
                                <input type="checkbox" value="">
                                <span class="cr"><i
                                            class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                <span class="text-inverse">Remember me</span>
                            </label>
                        </div>
                        <div class="forgot-phone text-right f-right">
                            <a href="auth-reset-password.html" class="text-right f-w-600"> Forgot
                                Password?</a>
                        </div>
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <button type="button"
                                class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                            Sign in
                        </button>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-10">
                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                        <p class="text-inverse text-left"><a href="index.html"><b>Back to website</b></a>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <img src="../files/assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
        <!-- end of form -->
    </div>
    <!-- end of col-sm-12 -->
</div>