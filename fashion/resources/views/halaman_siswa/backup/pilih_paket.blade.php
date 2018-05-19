@extends('master.siswa')

@section('title','Siswa')

@section('user','Hiu')
@section('fullname','Hiu Macan')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PAKET
        <small>Kursus</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{'/siswa'}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pilih Paket</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">

        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-diamond"></i>

              <h3 class="box-title">Tingkat Dasar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive" src="{{ URL::asset('adminlte/dist/img/photo1.png') }}" alt="Photo">
              <p class="lead">Dasar Fashion: Desain Busana dan Ilustrasi</p>

              <p>Harga</p>
              <p class="text-green">Rp. 7.500.000</p>
              <a class="btn btn-primary btn-block" href="{{'/siswa/paket/paket11'}}">Lihat Detail</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->

        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-diamond"></i>

              <h3 class="box-title">Tingkat Dasar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive" src="{{ URL::asset('adminlte/dist/img/photo2.png') }}" alt="Photo">
              <p class="lead">Belajar Menjahit dan Membuat Pola</p>

              <p>Harga</p>
              <p class="text-green">Rp. 8.000.000</p>
              <a class="btn btn-primary btn-block" href="{{'/siswa/paket/paket12'}}">Lihat Detail</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->

      </div>
      <!-- /.row -->

      <div class="row">

        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-diamond"></i>

              <h3 class="box-title">Tingkat Menengah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive" src="{{ URL::asset('adminlte/dist/img/photo3.jpg') }}" alt="Photo">
              <p class="lead">Desain Busana Tingkat Lanjut</p>

              <p>Harga</p>
              <p class="text-green">Rp. 5.200.000</p>
              <a class="btn btn-primary btn-block" href="{{'siswa'}}">Lihat Detail</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->

        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-diamond"></i>

              <h3 class="box-title">Tingkat Menengah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive" src="{{ URL::asset('adminlte/dist/img/photo3.jpg') }}" alt="Photo">
              <p class="lead">Sulam Pita</p>

              <p>Harga</p>
              <p class="text-green">Rp. 800.000</p>
              <a class="btn btn-primary btn-block" href="{{'siswa'}}">Lihat Detail</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->

      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-diamond"></i>

              <h3 class="box-title">Tingkat Mahir</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive" src="{{ URL::asset('adminlte/dist/img/photo4.jpg') }}" alt="Photo">
              <p class="lead">Lead to emphasize importance</p>

              <p class="text-green">Text green to emphasize success</p>
              <a class="btn btn-primary btn-block" href="{{'siswa'}}">Lihat Detail</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->

        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-diamond"></i>

              <h3 class="box-title">Tingkat Mahir</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive" src="{{ URL::asset('adminlte/dist/img/photo4.jpg') }}" alt="Photo">
              <p class="lead">Lead to emphasize importance</p>

              <p class="text-green">Text green to emphasize success</p>
              <a class="btn btn-primary btn-block" href="{{'siswa'}}">Lihat Detail</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
