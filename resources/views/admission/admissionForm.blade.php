@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="glyphicon glyphicon-user"></i>Online Registration
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-user"></i> Home</a></li>
        <li><a href="#">Admission</a></li>
        <li class="active">Online Registration</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  @if (Session::get('success'))
  <div class="alert alert-success">
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
               <h2 class="text-info text-center">Student Details</h2>
                <form role="form" action="/regonline" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-info"> General Information</h3>
                        <hr>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="fname">Student Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <input type="text" class="form-control" required name="name" placeholder="Full Name">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="nationality">Nationality</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <input type="text" class="form-control" required  name="nationality" placeholder="Nationality">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group ">
                        <label for="photo">Photo</label>
                        <input id="photo" name="photo" size="50" onchange="previewFile()" required type="file">
                        </div>
                      </div>

                      <div class="col-md-2">
                          <div class="form-group ">
                              <label for="photo" class="text-info">File Size must be Less than 200KB</label>
                              <label id="lblmsgphoto" class="text-danger"></label>
                            </div>
                      </div>
                    </div>
                  </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="class">Class</label>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home blue"></i></span>
                                        <select name="class" id="class" class="form-control" required>
                                            @foreach($classes as $class)
                                                <option value="{{$class->code}}">{{$class->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-3">
                            <div class="form-group ">
                                <label for="session">session</label>
                                <div class="input-group">

                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                                    <input type="text" id="session"  class="form-control datepicker2" name="session" required  data-date-format="yyyy">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group ">
                                           <label for="dob">Date Of Birth</label>
                                               <div class="input-group">

                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                                                  <input type="text"   class="form-control datepicker" name="dob" required  data-date-format="dd/mm/yyyy">
                                              </div>


                                       </div>
                          </div>


                          <div class="col-md-2">
                              <div class="form-group ">
                                <img src="" height="150" width="180" alt="Image preview...">
                                </div>
                          </div>

                      </div>
                    </div>




                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-info"> Academic Details:</h3>
                        <hr>
                    </div>
                  </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="col-md-4">
                              <div class="form-group">
                              <label class="control-label" for="campus">Campus</label>

                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                  <select name="campus" class="form-control" required="true">
                                    <option value="">--Select Campus---</option>
                                      <option value="1">Campus-1</option>
                                     <option value="2">Campus-2</option>

                                  </select>
                              </div>
                            </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label" for="keeping">Keeping</label>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                    <select name="keeping" class="form-control" required="true">
                                      <option value="">--Select Keeping---</option>
                                        <option value="Resident">Resident</option>
                                       <option value="Non-resident">Non-resident</option>
                                       <option value="Day Care">Day Care</option>
                                       <option value="Night Care">Night Care</option>

                                    </select>
                                </div>
                              </div>
                                </div>


                            </div>
                          </div>

                        <div class="row">
                          <div class="col-md-12">
                              <h3 class="text-info"> Guardian's Detail</h3>
                              <hr>
                          </div>
                        </div>
                          <div class="row">
                            <div class="col-md-12">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="fatherName">Father's Name </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                    <input type="text" class="form-control" required  name="fatherName" placeholder="Name">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="fatherCellNo">Father's Mobile No </label>
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                      <input type="text" class="form-control"  required name="fatherCellNo" placeholder="+8801xxxxxxxxx">
                                  </div>
                              </div>
                              </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="motherName">Mother's Name </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <input type="text" class="form-control" required  name="motherName" placeholder="Name">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="motherCellNo">Mother's Mobile No </label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                  <input type="text" class="form-control" required name="motherCellNo" placeholder="+8801xxxxxxxxx">
                              </div>
                          </div>
                          </div>

                  </div>
                </div>


                      <div class="clearfix"></div>

                    <div class="form-group pull-right">
                        <a class="btn btn-success" href="regonline"><i class="glyphicon glyphicon-retweet"></i> Reset</a> &nbsp;&nbsp;&nbsp;
                      <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i> Submit</button>

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
function previewFile() {
  var preview = document.querySelector('img');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }
  var sizeImg =file.size/1024;
  if (sizeImg<=200) {
    reader.readAsDataURL(file);
    $('#lblmsgphoto').text('');
  } else {
    preview.src = "";
    document.getElementById("photo").value = "";
    $('#lblmsgphoto').text('File is Too big!');
  }

}
    $( document ).ready(function() {

      $('.datepicker').datepicker({autoclose:true});
      $(".datepicker2").datepicker( {
    format: " yyyy", // Notice the Extra space at the beginning
    viewMode: "years",
    minViewMode: "years",
    autoclose:true
});

    });

</script>
@stop
