<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Student */

$this->title = 'Create A Student';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="col-lg-6">
    <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="box-body">
                 <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            
         	</div>
            <!-- /.box-body -->
        </div>
    </div>
