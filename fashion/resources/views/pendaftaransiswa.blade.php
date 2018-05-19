@extends('daftar.master_daftar')
@section('judul','Pendaftaran Siswa')
@section ('form_daftar')

<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Pendaftaran</b> Siswa</a>
  </div>

  <div class="register-box-body col-md-88">
    <p class="login-box-msg"></p>

    @if(count($errors)>0)
      @foreach($errors->all() as $error)
        <div class=" col-md-4 alert alert-danger">{{ $error }}</div>
      @endforeach
    @endif

      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- konten modal-->
          <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Message</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
              <p>Register Succesfully</p>
            </div>
            <!-- footer modal -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>


    <form action="/simpan" method="post">
      {{ csrf_field() }}
      <div class="form-group has-feedback">

        <input type="text" name="nama" class="form-control"
        placeholder="Nama Lengkap">
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="namapanggilan" class="form-control"
        placeholder="Nama Panggilan">
      </div>

      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">

      </div>

      <div class="form-group has-feedback">
        <input type="username" name="kodeuser" class="form-control" placeholder="Username">

      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">

      </div>

      <div class="form-group has-feedback">
        <input type="text" name="tempatlahir" class="form-control"
        placeholder="Tempat Lahir">
      </div>

      <div class="form-group date">
        <input type="date" name="tgllahir" class="form-control" id="datepicker"
        placeholder="yyyy-mm-dd">
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="alamat" class="form-control"
        placeholder="Alamat Siswa">
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="notelpon" class="form-control"
        placeholder="Nomor Telepon Siswa">
      </div>

      <div class="form-group has-feedback">
        <label class="col-form-label">Jenis Kelamin</label>
        <div>
          <div class="radio">
            <label>
            <input type="radio" name="jeniskelamin" id="optionRadios1" value="Laki-Laki" checked>
            Laki-Laki
          </label>
          </div>
          <div class="radio">
            <label>
            <input type="radio" name="jeniskelamin" id="optionRadios1" value="Perempuan">
            Perempuan
          </label>
          </div>
        </div>
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="propinsi" class="form-control"
        placeholder="Propinsi">
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="kota" class="form-control"
        placeholder="Kota">
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="namaortu" class="form-control"
        placeholder="Nama Orang Tua">
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="alamatortu" class="form-control"
        placeholder="Alamat Orang Tua">
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="notelpon_ortu" class="form-control"
        placeholder="Nomor Telpon Orang Tua">
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="id_referal" class="form-control"
        placeholder="ID Orang Yang Mengajak Anda">
      </div>

      <div class="row">
        <div class="col-xs-8">

        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="/login" class="text-center">Saya sudah daftar</a>

  </div>
  <!-- /.form-box -->
</div>
@endsection
