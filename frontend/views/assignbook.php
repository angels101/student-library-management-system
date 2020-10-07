<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BorrowedBook */
/* @var $form ActiveForm */
?>
<div class="assignbook">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'studentId') ?>
        <?= $form->field($model, 'bookId') ?>
        <?= $form->field($model, 'borrowDate') ?>
        <?= $form->field($model, 'returnDate') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- assignbook -->
