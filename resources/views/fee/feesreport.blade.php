@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="glyphicon glyphicon-book"></i>Fee Collection Report 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-book"></i> Home</a></li>
        <li><a href="#">Fee</a></li>
        <li class="active">Fee Collection Report </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @if (Session::get('success'))
        <div class="alert alert-success">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>Process Success.</strong><br>{{ Session::get('success')}}<br>
        </div>
    @endif
    @if (Session::get('noresult'))
        <div class="alert alert-warning">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>{{ Session::get('noresult')}}</strong>

        </div>
    @endif

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                
                <div class="box-content">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="dob">From Date</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                                            <input value="{{date('Y-m-d')}}" type="text" id="fdate"  class="form-control datepicker" name="sDate"   data-date-format="yyyy-mm-dd">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="dob">To Date</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                                            <input value="{{date('Y-m-d')}}" type="text" id="tdate" class="form-control datepicker" name="eDate"   data-date-format="yyyy-mm-dd">
                                        </div>


                                    </div>
                                </div>




                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary pull-right" id="btnPrint"><i class="glyphicon glyphicon-print"></i> Print</button>

                            </div>
                        </div>




                </div>
            </div>
        </div>
    </div>
 </section>
    <!-- /.content -->
  </div>
@stack('scripts')

    <script type="text/javascript">
        $( document ).ready(function() {
            $(".datepicker").datepicker( {
                autoclose:true,
                todayHighlight: true
            });

            $( "#btnPrint" ).click(function() {
                var fdate = $('#fdate').val();
                var tdate =  $('#tdate').val();

                if(fdate!="" && tdate !="") {
                    var getUrl = window.location;
                    var baseUrl = getUrl .protocol + "//" + getUrl.host;
                    var url =baseUrl+"/fees/report/"+fdate+"/"+tdate;

                    var win = window.open(url, '_blank');
                   win.focus();
                }
                else
                {
                    alert('Fill up inputs feilds correclty!!!');
                }
            });

        });

    </script>
@stop
