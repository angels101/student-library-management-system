<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'LIST STUDENTS';
$this->params['breadcrumbs'][] = $this->title;
?>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


<div class="box box-info">
            <div class="box-header with-border">
          <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
              <div style="text-align: center;">
                  <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                
                            'studentsId',
                            'userId',
                            'fullName',
                            'idNumber',
                            'regNo',
                
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
            </div>
            <!-- /.box-body -->
          </div>
