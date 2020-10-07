<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Author */
/* @var $form ActiveForm */
?>
<div class="addauthor">

    <?php $form = ActiveForm::begin([
            'action' =>['book/addauthor'],
            'method'=>'post',
        ]); ?>

        <?= $form->field($model, 'authorName') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addauthor -->
