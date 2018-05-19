@extends('master.siswa')
@section('title','Siswa')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Nilai
        <small>Kursus</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{'/siswa'}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Nilai</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <table class="table">
              <tr class="boderless">
                <th style="width:12%;">Kode Siswa</th>
                <td style="width:3%;">:</td>
                <td>{{ $data_siswa->KodeSiswa }}</td>
              </tr>
              <tr class="boderless">
                <th style="width:12%;">Nama</th>
                <td style="width:3%;">:</td>
                <td>{{ $data_siswa->NamaSiswa }}</td>
              </tr>
              <tr class="boderless">
                <th style="width:12%;">Jenis Kelas</th>
                <td style="width:3%;">:</td>
                <td>{{ $data_siswa->NamaGroup }}</td>
              </tr>
              <tr class="boderless">
                <th style="width:12%;">Area</th>
                <td style="width:3%;">:</td>
                <td>{{ $data_siswa->NamaArea }}</td>
              </tr>
            </table>
            <div class="box-body table-hover">

              <table class="table table-hover table-bordered">
                <tr class="bg-gray disabled color-palette">
                  <th style="width:14%;">Kode Kelas</th>
                  <th>Nama Kelas</th>
                  <th>Materi</th>
                  <th>Nilai</th>
                  <th>Grade</th>
                  <th>Tanggal</th>
                </tr>
                <tr>
                  <td>{{ $nilai->KodeKelas }}</td>
                  <td>{{ $nilai->NamaKelas }}</td>
                  <td>{{ $nilai->MateriUjian }}</td>
                  <td>{{ $nilai->StandardNilai }}</td>
                  <td></td>
                  <td>{{ date($nilai->Tanggal) }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
