@extends('master.siswa')

@section('title','Siswa')

@section('user','Hiu')
@section('fullname','Hiu Macan')

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
        <li class="active">Paket Dasar</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Detail</a></li>
              <li><a href="#tab_2" data-toggle="tab">Jadwal</a></li>
              <li><a href="#tab_3" data-toggle="tab">Persyaratan</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <b>Basic Fashion Design</b>

                <p style="text-align:justify;">Program dasar membut pola dan menjahit ditujukan pada peserta yang ingin terjun di dunia fashion. Program pendek ini menjadi solusi yang tepat untuk mencoba-coba sebelum melanjutkan ke bangku perkuliahan. Peserta akan diperkenalkan pada dasar-dasar membuat pola dan menjahit, materinya berupa:
                  Operating industrial sewing machine Basic sewing exercise for straight and circle lines
                  Fashion details, generalities seams, pockets, zippers, opening, etc
                  Base construction making women's wear (Skirt & Blouse)
                  Realization in fabric</p>

                <b>Manfaat</b>
                <p style="text-align: justify;">
                  Peserta dapat menggali bakat dan minat di bidang fashion dan desain sebelum melanjutkan ke jenjang kuliah
                  Peserta dapat berlatih dari guru profesional yang bergerak di bidang fashion
                  Peserta akan mendapatkan gambaran mengenai dunia fashion sebelum terjun ke dalamnya
                </p>

                <b>Detail Kursus</b>

                <table style="width: 65%;">
                  <tbody>
                    <tr>
                      <td>Jadwal </td>
                      <td> : </td>
                      <td> 4 Gelombang</td>
                    </tr>
                    <tr>
                      <td>Tipe </td>
                      <td> : </td>
                      <td> Paruh Waktu Siang</td>
                    </tr>
                    <tr>
                      <td>Level </td>
                      <td> : </td>
                      <td> Tingkat Dasar</td>
                    </tr>
                    <tr>
                      <td>Jumlah Pertemuan </td>
                      <td> : </td>
                      <td> 6x Pertemuan</td>
                    </tr>
                    <tr>
                      <td>Harga </td>
                      <td> : </td>
                      <td> Rp. 8.000.000</td>
                    </tr>
                    <tr>
                      <td>Angsuran </td>
                      <td> : </td>
                      <td> Rp. 1.600.000 X 5 </td>
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
                      <tr>
                        <td>1</td>
                        <td>Senin, Selasa, Rabu, Kamis</td>
                        <td>Bebas</td>
                        <td>09:00 - 12.00 WIB</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Senin, Selasa, Rabu, Kamis</td>
                        <td>Bebas</td>
                        <td>13:00 - 16.00 WIB</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Senin, Selasa, Rabu, Kamis</td>
                        <td>Bebas</td>
                        <td>17:00 - 20.00 WIB</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Sabtu</td>
                        <td>Bebas</td>
                        <td>11:00 - 14.00 WIB</td>
                      </tr>
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
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>

      <div class="row">
        <div class="col-md-6">
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
                      <option value="1">Malang</option>
                      <option value="2">Surabaya</option>
                      <option value="3">Sidoarjo</option>
                      <option value="4">Blitar</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputJam" class="col-sm-5 control-label">Pilih Jam dan Hari</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="inputJam" name="jam_hari">
                      <option value="1">09:00 - 12.00 WIB | Senin, Selasa, Rabu</option>
                      <option value="2">13:00 - 16.00 WIB | Senin, Selasa, Rabu</option>
                      <option value="4">11:00 - 14.00 WIB | Senin, Selasa, Rabu</option>
                      <option value="3">17:00 - 20.00 WIB | Sabtu</option>
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
                <div class="form-group">
                  <label for="inputKelas" class="col-sm-5 control-label">Kelas</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="inputKelas" name="jenis_kelas">
                      <option>Umum</option>
                      <option>Private</option>
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
