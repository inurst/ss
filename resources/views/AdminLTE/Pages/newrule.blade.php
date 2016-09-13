
    


@extends('AdminLTE.MasterAdmin')
@section("content")

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h4 class="th_baijam">
          ข้อบังคับมหาวิทยาลัยเชียงใหม่ ว่าด้วยการศึกษาระดับบัณฑิตศึกษา
          <small>Add Rules of Graduated CMU</small>
        </h4>
        <ol class="breadcrumb">
          <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
          <li>Add new Rule</li>
        </ol>
      </section>
    </section>

    <!-- Main content -->
    <section class="content th_baijam">      
      <div class="col-md-12">
        <div class="box box-danger">
          <div class="box-header">
            <h3 class="box-title">เพิ่มข้อบังคับใหม่</h3><hr>
          </div>
          <div class="box-body">
            
            <label>เพิ่มรูปของการเปลี่ยนแปลงข้อบังคับ.</label>
            <input type='file' onchange="readURL(this);" />
            <hr>
            <img id="blah" src="http://placehold.it/200x200" alt="images new rules" />
            <hr>

              <form action="#" role="form">
                <div class="form-group">
                  <label class="col-sm-2">ชื่อข้อบังคับ :</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="namerule" placeholder="Enter name rule">
                    </div>
                  </div>

                  <div class="form-group">
                  <label class="col-md-2">ชื่อข้อบังคับ :</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" id="namerule" placeholder="Enter name rule">
                    </div>
                  </div>
                  
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>

                <button type="submit" class="btn btn-primary">บันทึก</button>
              </form>
            
          </div>

        </div>
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
      </div>

    </section>
  </div>
<script>
          function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width("20%");
                };

                reader.readAsDataURL(input.files[0]);
            }
        }</script>

@stop


<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>