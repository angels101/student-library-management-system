<?php

use yii\bootstrap\Modal;
use frontend\models\Book;

/* @var $this yii\web\View */

$this->title = 'JAMES LMS';
$totalBooks = Book::find()->asArray()->all();
?>
<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL BOOKS</span>
              <span class="info-box-number"><?= count($totalBooks)?><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">BORROWED BOOKS</span>
              <span class="info-box-number">300</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">OVERDUE BOOKS</span>
              <span class="info-box-number">20</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL STUDENTS</span>
              <span class="info-box-number">100</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      
    
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
        	<div style="padding-top: 20px;">
        	   <button type="button" class="btn btn-block btn-success btn-lg assighnbook" style="width: 300px;"><i class="fa fa-plus" aria-hidden="true"></i> Assighn a Book</button>
            </div>
            <div style="text-align: center;">
                 <h2 class="box-title"><strong>BOOK ASSIGNMENTS</strong></h2>
            </div>
              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 300px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Student Name</th>
                  <th>Book Name</th>
                  <th>Date Taken</th>
                  <th>Return Date</th>
                  <th>Return Book</th>
                  <th>Status</th>
                </tr>
                <tr>
                  <td>John Doe</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>11-7-2014</td>
                  <td><span class="btn btn-danger">Return</span></td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      
     <?php
        Modal::begin([
            'header'=>'<h4>Assighn A Book</h4>',
            'id'=>'assignbook',
            'size'=>'modal-lg'
            ]);

        echo "<div id='assignbookContent'></div>";
        Modal::end();
      ?>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      