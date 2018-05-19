@extends('master.siswa')

@section('title','Siswa')

@section('user','hiu')
@section('fullname','hiu macan')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Siswa
        <small>Kursus</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{'siswa'}}"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
            <h2>Selamat Datang di Website Merachel</h2>
            <h4>{{Session::get('nama')}}</h1>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
