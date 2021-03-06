<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or ucfirst(Session::get('inName')) }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
    
        <link href="{{ asset("/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css")}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/jquery/dist/jQuery-2.1.3.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/bootstrap/dist/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>

<script src="{{ asset("/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js")}}"></script>
<script src="{{ asset("/bower_components/datatables.net/js/jquery.dataTables.js")}}"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

   <!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="/home" class="logo"><b>{{ucfirst(Session::get('inName'))}}</b></a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- User Image -->
                                            <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image"/>
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li><!-- end message -->
                            </ul><!-- /.menu -->
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li><!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li><!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li><!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"> {{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
                            <p>
                                {{Session::get('name')}}
                                <small>{{Session::get('userRole')}}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">                              
                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{Session::get('name')}}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
<span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="/home"><i class="glyphicon glyphicon-th-large"></i><span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-home"></i><span>Class</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="class/create">Add New</a></li>
                    <li><a href="class/list">Class List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-book"></i><span>Subject</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="subject/create">Add New</a></li>
                    <li><a href="subject/list">Subject List</a></li>
                </ul>
            </li>
             <li class="treeview">
                <a href="/gpa"><i class="glyphicon glyphicon-education"></i><span>GPA</span></a>
            </li>
            <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-user"></i><span>Student</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="student/create">Add New</a></li>
                    <li><a href="student/list">Student List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-pencil"></i><span>Attendance</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                	<li><a href="attendance/create-file">Add from file</a></li>
                    <li><a href="attendance/create">Add New</a></li>
                    <li><a href="attendance/list">Student List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-list-alt"></i><span>Mark Manage</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="mark/create">Add New</a></li>
                    <li><a href="mark/list">Marks List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-list"></i><span>Result</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="result/generate">Generate</a></li>
                    <li><a href="result/search">Search</a></li>
                    <li><a href="results">Search Public</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="/promotion"><i class="glyphicon glyphicon-arrow-up"></i><span>Promotion</span></a>
            </li>
            <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-list-alt"></i><span>Accounting</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="accounting/sectors">Sectors</a></li>
                    <li><a href="accounting/income">Add Income</a></li>
                    <li><a href="accounting/incomelist">View Income</a></li>
                    <li><a href="accounting/expence">Add Expence</a></li>
                    <li><a href="accounting/expencelist">View Expence</a></li>
                </ul>
            </li>
             @if (Session::get('userRole')=="Admin")
             <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-cog"></i><span>Settings</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="gpa">GPA Ruels</a></li>
                    <li><a href="users">Users</a></li>
                    <li><a href="institute">Institute</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-list-alt"></i><span>Fees</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="fees/view">Student Fees</a></li>
                    <li><a href="fee/collection">Fees Collection</a></li>
                    <li><a href="fees/list">Fees List</a></li>
                    <li><a href="fees/setup">Fees Setup</a></li>
                    <li><a href="fees/report">Fees Collection Report</a></li>
                </ul>
            </li>
             @endif
             <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-th-large"></i><span>Admission</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="applicants">Applicant List</a></li>
                    <li><a href="regonline">Online Registration</a></li>
                    <li><a href="admitcard">Print  Admitcard</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

        @yield('content')
        
    <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright © 2018 <a href="#">Caltech Pvt ltd.</a>.</strong> All rights reserved.
</footer>

</div><!-- ./wrapper -->


 
</body>
</html>