@extends('master.siswa')
@section('title','Siswa')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Jadwal
        <small>Kursus</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{'/siswa'}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Jadwal</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <table class="table boderless">
              <tr class="boderless">
                <th style="width:15%;">Kode Siswa</th>
                <td style="width:3%;">:</td>
                <td>{{ $data_siswa->KodeSiswa }}</td>
              </tr>
              <tr class="boderless">
                <th style="width:15%;">Nama</th>
                <td style="width:3%;">:</td>
                <td>{{ $data_siswa->NamaSiswa }}</td>
              </tr>
              <tr class="boderless">
                <th style="width:15%;">Area</th>
                <td style="width:3%;">:</td>
                <td>{{ $data_siswa->NamaArea }}</td>
              </tr>
            </table>

            @foreach ($jadwals as $jadwal)
            <div class="box-body table-hover">
              <table class="table table-hover table-bordered">
                <tr class="bg-gray disabled color-palette">
                  <th style="width:14%;">Kode Kelas</th>
                  <th>Nama Kelas</th>
                  <th>Level</th>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Durasi</th>
                  <th>Jenis Kelas</th>
                </tr>
                <tr>
                  <td>{{ $jadwal->KodeKelas }}</td>
                  <td>{{ $jadwal->NamaKelas }}</td>
                  <td>{{ $jadwal->LevelTingkat }}</td>
                  <td>{{ $jadwal->Hari }}</td>
                  <td>{{ $jadwal->Jam }}</td>
                  <td>{{ number_format($jadwal->DurasiWaktu) }} Jam</td>
                  <td>{{ $jadwal->NamaGroup }}</td>
                </tr>
              </table>
            @endforeach
          </br>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
