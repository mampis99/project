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
      <!--<h2 class="page-header">Class (minimum 5 orang)</h2>-->

      @foreach ($pakets as $paket)

          <div class="col-md-4">
            <div class="box box-solid">
              <div class="box-header with-border">
                <i class="fa fa-diamond"></i>
                <h3 class="box-title">{{$paket->NamaKelas}}</h3>
              </div>
              <div class="box-body">
                <img class="img-responsive" src="{{ URL::asset('img') }}/{{ $paket->IdGambar }}" alt="Photo">

                <!--<p>{{$paket->Deskripsi}}</p>-->
                <p>Harga</p>
                <p class="text-green">Rp {{ number_format($paket->Harga) }}</p>

                <a class="btn btn-primary btn-block" href="{{'/siswa/paket/id='}}{{$paket->Id}}">Lihat Detail</a>
              </div>
            </div>
          </div>

      @endforeach

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
