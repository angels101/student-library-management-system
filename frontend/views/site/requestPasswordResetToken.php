<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Password Reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="site-request-password-reset">
        <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>
    
        <p style="text-align: center">Please fill out your email. A link to reset password will be sent to your email.</p>
    
        <div class="row">
                <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                <div class="col-lg-8">
                    <?= $form->field($model, 'email')->textInput(['autofocus' => true,'placeholder' =>'Please Input your email'])->label(false) ?>
                </div>
                <div class="col-lg-4">
                   <?= Html::submitButton('Send <i class="fa fa-paper-plane" aria-hidden="true"></i>', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                <div class="col-lg-12">
                <a href="<?= Url::to(['site/login'])?>" class="btn btn-block btn-success">Go Back <i class="fa fa-sign-in" aria-hidden="true"></i></a>
                </div>
        </div>
    </div>
</div>