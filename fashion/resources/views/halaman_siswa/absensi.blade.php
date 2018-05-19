@extends('master.siswa')
@section('title','Siswa')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Absensi
        <small>Siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{'/siswa'}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Absensi</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-body table-hover">
              <table class="table table-hover table-bordered">
                <tr class="bg-gray disabled color-palette">
                  <th style="width:14%;">Kode Kelas</th>
                  <th>Nama Kelas</th>
                  <th>Tanggal</th>
                  <th>Kehadiran</th>
                  <th>Pertemuan</th>
                  <th>Keterangan</th>
                </tr>
                @foreach ($absensi_siswas as $absensi_siswa)
                <tr>
                  <td>{{ $absensi_siswa->KodeKelas }}</td>
                  <td>{{ $absensi_siswa->NamaKelas }}</td>
                  <td>{{ $absensi_siswa->Tanggal }}</td>
                  @if ($absensi_siswa->AbsensiMurid == '1')
                    <td>
                      <i class="fa fa-check"></i>
                    </td>
                  @else
                    <td>
                      <i class="fa fa-close"></i>
                    </td>
                  @endif
                  <td>Ke-{{ $absensi_siswa->Pertemuan }}</td>
                  <td>{{ $absensi_siswa->Keterangan }}</td>
                </tr>
                @endforeach
              </table>
            </br>
              <h6>Keterangan :</h6>
              <ul class="list-unstyled">
                <li>
                  <i class="fa fa-check"> Masuk</i>
                </li>
                <li>
                  <i class="fa fa-close"> Tidak Masuk</i>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
