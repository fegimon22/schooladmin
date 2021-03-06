@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="glyphicon glyphicon-book"></i> Income List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-book"></i> Home</a></li>
        <li><a href="#">Accounting</a></li>
        <li class="active"> Income List</li>
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
@if (Session::get('error'))
<div class="alert alert-warning">
    <button data-dismiss="alert" class="close" type="button">×</button>
    <strong> {{ Session::get('error')}}</strong>

</div>
@endif
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            
            <div class="box-content">

                <div class="row">
                    <div class="col-md-12">

                        <form role="form" action="/accounting/incomelist" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label for="session">Income Year</label>
                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                                                <input value="{{date('Y')}}" type="text"  required="true" class="form-control datepicker2" name="year" value=""   data-date-format="yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label for="ff">&nbsp;</label>
                                            <div class="input-group">
                                                <button class="btn btn-primary pull-right"  type="submit"><i class="glyphicon glyphicon-th"></i>Get List</button>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>


                            <br>
                        </form>
                    </div>
                </div>
                @if(count($incomes)>0)
                <div class="row">
                    <div class="col-md-12">
                        <table id="studentList" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Description</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($incomes as $income)
                                <tr>
                                    <td>{{$income->name}}</td>
                                    <td>{{$income->amount}}</td>
                                    <td>{{date_format(date_create($income->date), 'd/m/Y')}}</td>
                                    <td>{{$income->description}}</td>
                                    <td>
                                        <a title='Edit' class='btn btn-info' href='{{url("/accounting/incomeedit")}}/{{$income->id}}'> <i class="glyphicon glyphicon-edit icon-white"></i></a>&nbsp&nbsp<a title='Delete' class='btn btn-danger' href='{{url("/accounting/incomedelete")}}/{{$income->id}}'> <i class="glyphicon glyphicon-trash icon-white"></i></a>
                                    </td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endif
                    <br><br>


                </div>
            </div>
        </div>
    
   </section>
    <!-- /.content -->
  </div>
@stack('scripts')
    <script type="text/javascript">
    $( document ).ready(function() {
        $('#studentList').dataTable();
        $(".datepicker2").datepicker( {
            format: " yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years",
            autoclose:true

        });
    });
    </script>
    @stop
