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
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pilih Paket</h3>
            </div>
            <div class="row">
              <div class="box-body">
                <div class="col-md-3">
                  <form action="/siswa/paket/cari" method="post">
                    {{ csrf_field() }}
                    <table>
                      <tr>
                        <td style="width : 70%">
                          <select class="form-control" name="kodegroupkelas" id="InputJenisKelas">
                              <option value="">PILIH JENIS PAKET</option>
                            @foreach ($kodegroupkelass as $kodegroupkelas)
                              <option value="{{ $kodegroupkelas->KodeGroupKelas }}">{{ $kodegroupkelas->NamaGroup }}</option>
                            @endforeach
                          </select>
                        </td>
                        <td>
                            <button class="btn btn-info pull-right" type="submit" name="btn" >CARI</button>
                        </td>
                      </tr>
                    </table>
                  </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="box-body">
                @foreach ($pakets as $paket)
                  <div class="col-md-4">
                    <div class="box box-solid">
                      <div class="box-header with-border">
                        <i class="fa fa-diamond"></i>
                        <h4 class="box-title">{{ $paket->NamaKelas }}</h3>
                      </div>
                      <div class="box-body">
                        <img class="img-responsive" src="{{ URL::asset('img') }}/..." alt="Photo">
                        <table>
                          <tr>
                            <td><label>Area Kursus : {{ $paket->NamaArea }}</label></td>
                          </tr>
                          <tr>
                            <td><label>Harga : Rp {{ number_format($paket->Additional) }}</label></td>
                          </tr>
                        </table>
                        <a class="btn btn-primary btn-block" href="{{'/siswa/paket/id='}}{{$paket->KodeKelas}}">Lihat Detail</a>
                      </div>
                    </div>
                  </div>
                @endforeach
                <div class="col-md-12">
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('javascript')
  <script>
    <!---->
  </script>
@endsection
