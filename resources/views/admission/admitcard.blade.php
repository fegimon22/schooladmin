@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="glyphicon glyphicon-print"></i>Admit Card Print
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-print"></i> Home</a></li>
        <li><a href="#">Admission</a></li>
        <li class="active">Admit Card Print</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  @if (Session::get('success'))
  <div class="alert alert-danger">
      <strong>{{ Session::get('success')}}</strong>
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

                <form role="form" action="/printadmitcard" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="refNo">Referance No:</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <input type="text" class="form-control" required name="refNo">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="transactionNo">bkash Transaction No:</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <input type="text" class="form-control" required  name="transactionNo">
                            </div>
                        </div>
                      </div>

                    </div>
                  </div>



                      <div class="clearfix"></div>

                    <div class="form-group pull-right">
                    <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-print"></i> Print Admit Card</button>

                    </div>
                      <div class="clearfix"></div>
                  </form>






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


    });

</script>
@stop
