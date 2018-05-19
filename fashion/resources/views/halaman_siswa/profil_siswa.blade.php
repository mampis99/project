@extends('master.siswa')
@section('title','Siswa')

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Siswa
        <small>Kursus</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{'/siswa'}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profil Siswa</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-user"></i>
              <h3 class="box-title">Profil</h3>
            </div>
            <div class="box-body">
              @if (count($Biodatasiswa)>0)
                <div class="box-body table-hover no-padding">
                  <table class="table table-hover">
                    <tbody>
                      <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->NamaSiswa}}</td>
                      </tr>
                      <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->TempatLahir}}</td>
                      </tr>
                      <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->TanggalLahir}}</td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->JenisKelamin}}</td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->Alamat}}</td>
                      </tr>
                      <tr>
                        <td>Kota</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->Kota}}</td>
                      </tr>
                      <tr>
                        <td>Propinsi</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->Propinsi}}</td>
                      </tr>
                      <tr>
                        <td>No. Telpon</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->No_Telpon}}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->E_Mail}}</td>
                      </tr>
                      <tr>
                        <td>Nama Orang Tua</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->NamaOrangtua}}</td>
                      </tr>
                      <tr>
                        <td>Alamat Orang Tua</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->AlamatOrangtua}}</td>
                      </tr>
                      <tr>
                        <td>No. Telpon Orang Tua</td>
                        <td>:</td>
                        <td>{{$Biodatasiswa->No_TelponOrangTua}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


@endsection
