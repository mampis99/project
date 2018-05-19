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
            <form class="" action="/siswa/cari_paket" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="table-responsive">
                        <table class="table borderless">
                          <tr>
                            <td>
                              <label for="inputArea">Area</label>
                            </td>
                            <td>
                              <label for="inputGroupKelas">Jenis Kelas</label>
                            </td>
                          </tr>
                          <tr class="borderless">
                            <td>
                                <select class="form-control" name="area" id="inputArea">
                                    <option>Pilih Area</option>
                                  @foreach ($areas as $area)
                                    <option value="{{ $area->KodeArea }}">{{ $area->NamaArea }}</option>
                                  @endforeach
                                </select>
                            </td>
                            <td>
                              <select class="form-control" name="groupkelas" id="inputGroupKelas">

                              </select>
                            </td>
                            <td>
                              <label></label>
                              <button type="submit" class="btn btn-primary">CARI</button>
                            </td>
                          </tr>
                        </table>
                      </div>

                    </div>
                  </div>
                  <div class="row">
                    @foreach ($pakets as $paket)
                      <div class="col-md-4">
                        <div class="box box-solid">
                          <div class="with-border">
                            <div class="box-body">
                              <img class="img-responsive" src="{{ URL::asset('img') }}/{{ $paket->IdGambar }}" alt="Photo">
                              <p>{{ $paket->NamaKelas }}</p>
                              <p>Harga</p>
                              <p class="text-green">Rp {{ number_format($paket->Harga) }}</p>
                              <a class="btn btn-primary btn-block" href="{{ '/siswa/paket/id=' }}{{ $paket->Id }}">Lihat Detail</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                    <!--
                    <div class="col-xs-3">
                      <label for="inputArea">Area</label>
                      <select class="form-control" name="area" id="inputArea">
                        @foreach ($areas as $area)
                          <option value="{{ $area->KodeArea }}">{{ $area->NamaArea }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-xs-3">
                      <label for="inputJenis_kursus">Jenis Kursus</label>
                      <select class="form-control" name="jenis_kursus" id="inputJenis_kursus">
                          <option value="">Private</option>
                      </select>
                    </div>
                  -->
                  </div>
                </div>
              </div>
              <!--
              <button type="submit" class="btn btn-primary btn-lg">CARI</button>
              -->
            </form>
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
    $('#inputArea').on('change', function(e){
      console.log(e);
      var kode_area = e.target.value;

      //ajax
      $.get('/siswa/paket/'+ kode_area, function(data){
        //succes data
        //console.log(data);
        $('#inputGroupKelas').empty();
        $.each(data, function(index, groupObj){
          $('#inputGroupKelas').append('<option value="'+groupObj.KodeGroupKelas+'">'+groupObj.NamaGroup+'</option>');
        });
      });
    });
  </script>
@endsection
