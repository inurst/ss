@extends('AdminLTE.MasterAdmin')

@section("content")

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      All Rules of Graduated CMU
      <small>ข้อบังคับฯ</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Rules All</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>54</h3>

              <p>ปริญญาโท</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a data-toggle="pill" href="#mba54" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>54</h3>

              <p>ปริญญาเอก</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a data-toggle="pill" href="#phd54" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>57</h3>

              <p>ปริญญาโท</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a data-toggle="pill" href="#mba57" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>57</h3>

              <p>ปริญญาเอก</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a data-toggle="pill" href="#phd57" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

    </div>
  
    <div class="tab-content">
        <div id="mba54" class="tab-pane fade in active">
            <div class="panel panel-body" id="rule-mba54">
                <h3>ปริญญาโท 54</h3>
                <p>ข้อ 1...........</p>
                <p>ข้อ 2...........</p>
                <p>ข้อ 3...........</p>
            </div>
        </div>
        <div id="phd54" class="tab-pane">
            <div class="panel panel-body" id="rule-phd54">
                <h3>ปริญญาเอก 54</h3>
                <p>ข้อ 1...........</p>
                <p>ข้อ 2...........</p>
                <p>ข้อ 3...........</p>
            </div>
        </div>
        <div id="mba57" class="tab-pane">
            <div class="panel panel-body" id="rule-mba57">
                <h3>ปริญญาโท 57</h3>
                <p>ข้อ 1...........</p>
                <p>ข้อ 2...........</p>
                <p>ข้อ 3...........</p>
            </div>
        </div>
         <div id="phd57" class="tab-pane">
            <div class="panel panel-body" id="rule-phd57">
                <h3>ปริญญาเอก 57</h3>
                <p>ข้อ 1...........</p>
                <p>ข้อ 2...........</p>
                <p>ข้อ 3...........</p>
            </div>
        </div>
    </div>

  <div class="row">
    <div class="col-lg-3">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3 id="vs-confirm">VS</h3>
          <p>เปรียบเทียบข้อบังคับฯ</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
        <a id="vs-confirm"class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-xs-9">
        <div class="col-md-6">
            <select class="form-control" id="first-select">
                <option value="541">ปริญญาโท 54</option>
                <option value="542">ปริญญาเอก 54</option>
                <option value="571">ปริญญาโท 57</option>
                <option value="572">ปริญญาเอก 57</option>
            </select>
        </div>
        <div class="col-md-6">
            <select class="form-control" id="secend-select">
                <option value="541">ปริญญาโท 54</option>
                <option value="542">ปริญญาเอก 54</option>
                <option value="571">ปริญญาโท 57</option>
                <option value="572">ปริญญาเอก 57</option>
            </select>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-body" id="first-rule">
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-body" id="second-rule">
            </div>
        </div>
    </div>
  </section>
  
 </div>
@endsection

