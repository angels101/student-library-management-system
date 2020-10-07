<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Book */

$this->title = 'Update Book: ' . $model->bookId;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bookId, 'url' => ['view', 'id' => $model->bookId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
