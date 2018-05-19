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
            <div class="box-body">
              <div class="row">
                <div class="col-md-3">
                  <select class="form-control" name="jenis_kelas" id="InputJenisKelas">
                      <option>Pilih Jenis Kelas</option>
                    @foreach ($kodegroupkelass as $kodegroupkelas)
                      <option value="{{ $kodegroupkelas->KodeGroupKelas }}">{{ $kodegroupkelas->NamaGroup }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="box-body">

                  <div class="col-md-4">
                    <p id="demo"></p>
                  </div>



                  @for ($i=0; $i < {{<p id="dm"></p>}}; $i++)
                    <div class="col-md-4">
                      <p>jjj</p>
                    </div>
                  @endfor
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
    $('#InputJenisKelas').on('change', function(e){
      console.log(e);
      var kodegroupkelas = e.target.value;

      //ajax
      $.get('/siswa/paket/kodegroupkelas='+ kodegroupkelas, function(data){
        //succes data
        //console.log(data);
        //$('.demo').empty();
        var txt = "";
        var jumlah_data = data.length;
        //var len = data.length;
        console.log(jumlah_data);
        for (x in data){
          txt +='<li>' + data[x].KodeKelas +' '+ data[x].NamaKelas +'</li>';
        }
        document.getElementById("dm").innerHTML = jumlah_data;
        document.getElementById("demo").innerHTML = txt;
      });
    });
  </script>
@endsection
