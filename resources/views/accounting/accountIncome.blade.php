@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="glyphicon glyphicon-user"></i> Income Entry Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-user"></i> Home</a></li>
        <li><a href="#">Accounting</a></li>
        <li class="active"> Income Entry Form</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @if (Session::get('success'))
        <div class="alert alert-success">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>Process Success.</strong> {{ Session::get('success')}}

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
                       <form role="form" action="/accounting/incomecreate" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @if(count($sectors)>0)
                            @foreach($sectors as $sector)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="gpa">Sector Name</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                                <input type="text" class="form-control" required name="name[{{$sector->id}}]" value="{{$sector->name}}" readonly="true" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label" for="type">Amount</label>

                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                                <input type="text" class="form-control"  name="amount[{{$sector->id}}]"   placeholder="0.00">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group ">
                                            <label for="dob">Date</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                                                <input type="text" value="{{date('d/m/Y')}}"  class="form-control datepicker" name="date[{{$sector->id}}]"   data-date-format="dd/mm/yyyy">
                                            </div>


                                        </div>
                                    </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="type">Description</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>

                                            <textarea class="form-control"  name="description[{{$sector->id}}]"></textarea>


                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                            @endforeach

                            <br>
                            <button class="btn btn-primary pull-right" type="submit"><i class="glyphicon glyphicon-plus"></i>Save</button>

                           @else
                                <div class="alert alert-warning">
                                    <strong>Whoops!</strong> There are no income sector created yet!.<br><br>
                                    <strong><a href="{{url()}}/accounting/sectors">Create Here</a></strong>
                                </div>

                            @endif
                        </form>
                        <br>  <br>
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

            $('.datepicker').datepicker({autoclose:true,todayHighlight:true});

        });

    </script>

@stop
