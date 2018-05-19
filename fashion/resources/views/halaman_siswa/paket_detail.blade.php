@extends('master.siswa')

@section('title','Siswa')

@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Paket
        <small>Kursus</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{'/siswa'}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{'/siswa/paket'}}"><i></i> Pilih Paket</a></li>
        <li class="active">Detail</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">

        <!--Left-->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-body">
              <img class="img-responsive" src="{{ URL::asset('img') }}/..." alt="Photo">
            </div>
          </div>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">info</h3>
            </div>
            <div class="box-body">
              <p class="text-muted">Jumlah Peserta : ... siswa</p>
              <p class="text-muted">Status : ... </p>
            </div>
          </div>
        </div>

        <!--Right-->
        <div class="col-md-6">
          <div class="box box-primary">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Detail</a></li>
                <li><a href="#tab_2" data-toggle="tab">Jadwal</a></li>
                <li><a href="#tab_3" data-toggle="tab">Persyaratan</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">

                    <b>{{ $paket->NamaKelas }}</b><br>
                    <p>...Keterangan...</p>

                  <b>Detail Kursus</b>

                  <table style="width: 65%;">
                    <tbody>
                      <tr>
                        <td>Jadwal </td>
                        <td> : </td>
                        <td> ... Gelombang</td>
                      </tr>
                      <tr>
                        <td>Level </td>
                        <td> : </td>
                        <td>{{ $paket->LevelTingkat }}</td>
                      </tr>
                      <tr>
                        <td>Total Pertemuan </td>
                        <td> : </td>
                        <td>{{ number_format($paket->Pertemuan) }} x Pertemuan</td>
                      </tr>
                      <tr>
                        <td>Harga </td>
                        <td> : </td>
                        <td>Rp {{ number_format($paket->Additional) }}</td>
                      </tr>
                      <tr>
                        <td>Angsuran </td>
                        <td> : </td>
                        <td>Rp ... X 2 </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <th>NO</th>
                          <th>Hari</th>
                          <th>Tanggal</th>
                          <th>Jam</th>
                        </tr>
                        @php
                          $no = 1;
                        @endphp
                        @foreach ($jadwals as $jadwal)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $jadwal->Hari }}</td>
                          <td> - </td>
                          <td>{{ $jadwal->Jam }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                  <p>Usia minimal 17 tahun.</p>
                  <p>Membawa perlatan sendiri :</p>

                  <ul>
                    <li>Pencil, Eraser, Pensil</li>
                    <li>Penggaris gradiasi untuk pola</li>
                    <li>Penggaris curve dan L untuk pola</li>
                    <li>Kertas Pola (diutamakan warna putih)</li>
                    <li>Masking Tape</li>
                    <li>Jarum pentul</li>
                    <li>Kapur penjahit</li>
                    <li>Measurement tape</li>
                    <li>Gunting kertas</li>
                    <li>Gunting kain</li>
                    <li>Kain belacu</li>
                  </ul>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
          </div>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pilih Jadwal dan Metode Pembayaran</h3>
            </div>
            <form class="form-horizontal" action="{{url()->current()}}" method="POST">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputArea" class="col-sm-5 control-label">Pilih Area</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="inputArea" name="area_kursus">
                      @foreach ($areas as $area)
                        <option value="{{ $area->KodeArea }}">{{ $area->NamaArea }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputKelas" class="col-sm-5 control-label">Kelas</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="inputKelas" name="jenis_kelas">
                      @foreach ($groups as $group)
                        <option value="{{ $group->KodeGroupKelas }}">{{ $group->NamaGroup }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputJam" class="col-sm-5 control-label">Pilih Jam dan Hari</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="inputJam" name="jam_hari">
                      @foreach ($jadwals as $jadwal)
                        <option value="{{ $jadwal->KodeJadwal }}">{{ $jadwal->Hari }} || {{ $jadwal->Jam }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputBayar" class="col-sm-5 control-label">Metode Pembayaran</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="inputBayar" name="metode_bayar">
                      <option>Tunai</option>
                      <option>Transfer</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">OK</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </section>
  </div>
@endsection
