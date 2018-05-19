<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MERACHEL | Fashion Course</title>
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
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

    <!--header-->
    @include('include.header')
    <!--sidebar-->
    @include('include.sidebar')

    @include('include.content')

    <!--footer-->
    @include('include.footer')

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
<script src="{{ URL::asset('adminlte/dist/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('adminlte/dist/js/demo.js')}}"></script>
</body>
</html>
