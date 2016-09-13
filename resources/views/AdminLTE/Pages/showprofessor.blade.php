
@extends('AdminLTE.MasterAdmin')
@section("content")

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="panel">
        <div class="panel-body">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Show all professor...
        </h1>
        <ol class="breadcrumb">
          <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
          <li >Show all Professor</li>
        </ol>
      </section>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-success">
          <div class="box-header">
            <h3>อาจารย์ประจำ</h3>
          </div>
          <div class="row box-body">
            <?php
              for ($i=0; $i < 5 ; $i++) { 
                echo '
                <div class="col-md-2 img-portfolio">
                        
                            <img class="img-responsive img-circle" src="http://placehold.it/100x100" alt="PictureProfessor">
                        
                        <h5>
                            <a href="#" class="">Chanapol Sunyo</a>
                        </h5>
                  </div>
              ';
              }
              
              ?>
          </div>
        </div>

          <div class="box box-success">
          <div class="box-header">
            <h3>อาจารย์พิเศษ</h3>
          </div>
          <div class="row box-body">
            <?php
              for ($i=0; $i < 5 ; $i++) { 
                echo '
                <div class="col-md-2 img-portfolio">
                        
                            <img class="img-responsive img-circle" src="http://placehold.it/100x100" alt="PictureProfessor">
                        
                        <h5>
                            <a href="#" class="">Chanapol Sunyo</a>
                        </h5>
                  </div>
              ';
              }
              
              ?>
          </div>
        </div>
        
    </section>
      
      </div>
    </div>
  </div>
@stop