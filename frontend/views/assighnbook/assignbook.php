<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Student;
use frontend\models\Book;

/* @var $this yii\web\View */
/* @var $model frontend\models\BorrowedBook */
/* @var $form ActiveForm */
$students = ArrayHelper::map(Student::find()->all(), 'studentId', 'fullName');
$books = ArrayHelper::map(Book::find()->all(), 'bookId', 'bookName');
?>
<div class="assignbook">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'studentId')->dropDownList($students) ?>
        <?= $form->field($model, 'bookId')->dropDownList($books) ?>
        <?= $form->field($model, 'borrowDate') ?>
        <?= $form->field($model, 'returnDate') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- assignbook -->
