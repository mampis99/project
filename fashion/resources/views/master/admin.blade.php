<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MERACHEL | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!--<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">

<!--Header-->
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>CL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MERACHEL</b> </span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{URL::asset('adminlte/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Session::get('username')}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{URL::asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  <small>Hai,</small>
                  {{Session::get('nama')}}
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{'/profil'}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{'/logout'}}" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
<!--/Header-->

<!--sidebar-->
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Guru</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Biodata Guru</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Akun Guru</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Jadwal Guru</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Nilai Guru</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Biodata Siswa</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Akun Siswa</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Jadwal Siswa</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Nilai Siswa</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<!--/Sidebar-->

<!--Content-->
@yield('content')
<!--/Content-->

<!--Footer-->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018 <a href="#">DnizTechno</a>.</strong>
  </footer>
<!--/Footer-->

<!--Control Sidebar-->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ URL::asset('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap  -->
<script src="{{ URL::asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ URL::asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('adminlte/bower_components/chart.js/Chart.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="{{ URL::asset('adminlte/dist/js/pages/dashboard2.js')}}"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('adminlte/dist/js/demo.js')}}"></script>
</body>
</html>
