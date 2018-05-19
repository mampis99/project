<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\userq;
use App\Biodatasiswa;
use App\MataUang;
use App\AmbilMataPelajaran;

class SiswaController extends Controller
{
    public function index()
    {
      //$data = Session::get('name');
      //$password = Session::get('password');
      //dd('k');
      return view('halaman_siswa/home');
    }

    //--
    public function profil()
    {
      $username = Session::get('username');
      $password = Session::get('password');

      $Biodatasiswa = Biodatasiswa::where([
                                    ['KodeUser','=',$username],
                                    ['Status','=','AKTIF']
                                  ])->first();

      //$NamaSiswa = $Biodatasiswa->NamaSiswa;
      //dd($Biodatasiswa);

      if (count($Biodatasiswa)>0)
      {
        return view('halaman_siswa/profil_siswa')->with('Biodatasiswa',$Biodatasiswa);
      }
      else {
        return redirect('/login');
      }

    }
    //--
    public function pilih_paket()
    {
      $groupkelas = DB::table('grupkelas')
                        ->where('Status','=','ON')
                        ->select('KodeGroupKelas','NamaGroup')
                        ->get();
      $paket = DB::table('matpelblog')
                          ->join('kelas','matpelblog.KodeKelas','=','kelas.KodeKelas')
                          ->where('Status','=','1')
                          ->get();
      //dd($paket);
      //dd($area);
      return view('halaman_siswa/pilih_paket')->with([
                                                      'kodegroupkelass'=>$groupkelas,
                                                      'pakets'=>$paket
                                                    ]);
    }

    public function cari_kelas(Request $request)
    {
      $groupkelas = DB::table('grupkelas')
                        ->where('Status','=','ON')
                        ->select('KodeGroupKelas','NamaGroup')
                        ->get();
      $paket = DB::table('kelas')
                      ->join('grupkelas','kelas.KodeGroupKelas','=','grupkelas.KodeGroupKelas')
                      ->join('area','kelas.KodeArea','=','area.KodeArea')
                      ->where('kelas.KodeGroupKelas','=',$request->kodegroupkelas)
                      ->select('kelas.KodeKelas','kelas.NamaKelas','kelas.LevelTingkat','kelas.Additional','area.NamaArea')
                      ->get();

      //dd($pakets);
      return view('halaman_siswa/pilih_paket')->with(
                                                [
                                                  'kodegroupkelass'=>$groupkelas,
                                                  'pakets'=>$paket
                                                ]);
    }

    public function paket_detail($kode_kelas)
    {
      $paket = DB::table('kelas')
                      ->where('kelas.KodeKelas','=',$kode_kelas)
                      ->first();

      $jadwal = DB::table('jadwal')
                        ->where('jadwal.KodeKelas','=',$paket->KodeKelas)
                        ->get();
      dd($jadwal);
      return View('halaman_siswa/paket_detail');
    }

    //public function cari_paket(Request $request)
    //{
    //  $area1 = $request->area;
    //  $groupkelas = $request->groupkelas;
    //  //$aa = $area." ".$groupkelas;

    //  $paket = DB::table('matpelblog')
    //              ->join('kelas','matpelblog.KodeKelas','=','kelas.KodeKelas')
    //              ->where('kelas.KodeArea','=',$area1)
    //              ->where('kelas.KodeGroupKelas','=',$groupkelas)
    //              ->where('Status','=','AKTIF')
    //              ->get();

    //  Session::put('area1',$area1);
    //  Session::put('groupkelas',$groupkelas);

      //dd($pakets);
    //  return View('halaman_siswa/pilih_paket')->with([
    //                                                  'pakets'=>$paket
    //                                                ]);
    //}

    //--

    //public function paket($pkt)
    //{
    //  $get_area = Session::get('area1');
    //  $get_kdgroupkelas = Session::get('groupkelas');
    //  $area = DB::table('area')
    //              ->where('Status','=','ON')
    //              ->where('KodeArea','=',$get_area)
    //              ->get();
    //  $group = DB::table('grupkelas')
    //                ->where('Status','=','ON')
    //                ->where('KodeGroupKelas','=',$get_kdgroupkelas)
    //                ->get();
    //  $paket = DB::table('matpelblog')
    //                      ->join('kelas','matpelblog.KodeKelas','=','kelas.KodeKelas')
    //                      ->where('matpelblog.Id','=',$pkt)
    //                      ->first();
    //  $get_kodekelas = $paket->KodeKelas;
    //  $get_jadwal = DB::table('jadwal')
    //                ->where('KodeKelas','=',$get_kodekelas)
    //                ->where('Status','=','Aktif')
    //                ->get();
    //  $count_jadwal = DB::table('jadwal')
    //                      ->where('KodeKelas','=',$get_kodekelas)
    //                      ->where('Status','=','Aktif')
    //                      ->count();
    //  $count_peserta = DB::table('ambilmatapelajarandetail')
    //                          ->where('KodeKelas','=',$get_kodekelas)
    //                          ->count();
    //  //dd($paket);
    //  return view('halaman_siswa/paket_detail')->with([
    //                                            'areas'=>$area,
    //                                            'groups'=>$group,
    //                                            'paket'=>$paket,
    //                                            'gelombang'=>$count_jadwal,
    //                                            'jmlpeserta'=>$count_peserta,
    //                                            'jadwals'=>$get_jadwal,
    //                                            //'gelombang',$count_jadwal
    //                                            ]);
    //}

    public function ambil_paket(Request $request ,$pkt)
    {
      $username = Session::get('username');
      $area = $request->area_kursus;
      $jam_hari = $request->jam_hari;
      $metode_bayar = $request->metode_bayar;
      $jenis_kelas = $request->jenis_kelas;

      $tanggal_modif = date('Y-m-d h:i:s');
      $tanggal_daftar = date('Y-m-d');

      $max_data = DB::table('ambilmatapelajaran')->max('NoPendaftaran');
      $get_nomor = substr($max_data,-4);
      $char1 = "MRC";
      $char2 = "KRS";
      $bulan = date('m');
      $tahun = date('Y');
      $nopendaftaran = $char1."/".$char2."/".$tahun."/".$bulan.sprintf('%04s',$get_nomor+1);

      $max_ambildetail = DB::table('ambilmatapelajarandetail')->max('NoRec');
      $no = $max_ambildetail+1;

      $get_datasiswa = DB::table('biodatasiswa')
                            ->where('KodeUser','=',$username)
                            ->first();

      $get_kelas = DB::table('matpelblog')
                          ->join('kelas','matpelblog.KodeKelas','=','kelas.KodeKelas')
                          ->where('matpelblog.Id','=',$pkt)
                          ->first();
      //dd($no);
      if (count($get_datasiswa)>0)
      {
        DB::table('ambilmatapelajaran')->insert(
                                      [
                                        'NoPendaftaran'=>$nopendaftaran,
                                        'Status'=>'OPN',
                                        'Tanggal'=>$tanggal_daftar,
                                        'KodeSiswa'=>$get_datasiswa->KodeSiswa,
                                        'KodeArea'=>$area,
                                        'KodeMataUang'=>'RP'
                                      ]);
        DB::table('ambilmatapelajarandetail')->insert(
                                            [
                                              'NoRec'=>$no,
                                              'NoPendaftaran'=>$nopendaftaran,
                                              'KodeGuru'=>'KD',
                                              'KodeGroupKelas'=>$jenis_kelas,
                                              'KodeKelas'=>$get_kelas->KodeKelas,
                                              'KodeJadwal'=>$jam_hari
                                            ]);
        return redirect('/siswa');
      }
      else {
        return redirect('/login');
      }
      //dd($pkt." ".$area." ".$jam_hari." ".$metode_bayar." ".$jenis_kelas);
    }

    public function absensi_siswa()
    {
      $username = Session::get('username');
      $absensi_siswa = DB::table('biodatasiswa')
                           ->where('biodatasiswa.KodeUser','=',$username)
                           ->join('ambilmatapelajaran','biodatasiswa.KodeSiswa','=','ambilmatapelajaran.KodeSiswa')
                           ->join('ambilmatapelajarandetail','ambilmatapelajaran.NoPendaftaran','=','ambilmatapelajarandetail.NoPendaftaran')
                           ->join('kelas','ambilmatapelajarandetail.KodeKelas','=','kelas.KodeKelas')
                           ->join('absensikehadiran','ambilmatapelajaran.NoPendaftaran','=','absensikehadiran.NoPendaftaran')
                           ->select('ambilmatapelajarandetail.KodeKelas','kelas.NamaKelas','absensikehadiran.AbsensiMurid','absensikehadiran.Tanggal','absensikehadiran.Pertemuan','absensikehadiran.Keterangan')
                           ->get();
      //dd($absensi_siswa);
      return view('halaman_siswa.absensi')->with('absensi_siswas',$absensi_siswa);
    }

    public function jadwal()
    {
      $username = Session::get('username');
      $data_siswa = DB::table('biodatasiswa')
                        ->where('biodatasiswa.KodeUser','=',$username)
                        ->join('ambilmatapelajaran','biodatasiswa.KodeSiswa','=','ambilmatapelajaran.KodeSiswa')
                        ->join('area','ambilmatapelajaran.KodeArea','=','area.KodeArea')
                        ->select('biodatasiswa.KodeSiswa','biodatasiswa.NamaSiswa','area.NamaArea')
                        ->first();
      $jadwal = DB::table('biodatasiswa')
                    ->where('biodatasiswa.KodeUser','=',$username)
                    ->join('ambilmatapelajaran','biodatasiswa.KodeSiswa','=','ambilmatapelajaran.KodeSiswa')
                    ->join('ambilmatapelajarandetail','ambilmatapelajaran.NoPendaftaran','=','ambilmatapelajarandetail.NoPendaftaran')
                    ->join('area','ambilmatapelajaran.KodeArea','=','area.KodeArea')
                    ->join('grupkelas','ambilmatapelajarandetail.KodeGroupKelas','=','grupkelas.KodeGroupKelas')
                    ->join('kelas','ambilmatapelajarandetail.KodeKelas','=','kelas.KodeKelas')
                    ->join('jadwal','ambilmatapelajarandetail.KodeJadwal','=','jadwal.KodeJadwal')
                    ->select('biodatasiswa.KodeSiswa','biodatasiswa.NamaSiswa','ambilmatapelajarandetail.TglDari','ambilmatapelajarandetail.TglSampai','grupkelas.NamaGroup','area.NamaArea',
                              'kelas.KodeKelas','kelas.NamaKelas','kelas.LevelTingkat','kelas.DurasiWaktu','jadwal.Hari','jadwal.Jam')
                    ->get();
      //dd($data_siswa);
      if (count($jadwal)>0) {
        //dd($kode_siswa);
        return View('halaman_siswa.jadwal')->with([
                                            'data_siswa'=>$data_siswa,
                                            'jadwals'=>$jadwal
                                            ]);

      }
      else {
        return redirect('/siswa');
      }
    }

    public function nilai_siswa()
    {
      $username = Session::get('username');
      $data_siswa = DB::table('biodatasiswa')
                        ->where('biodatasiswa.KodeUser','=',$username)
                        ->join('ambilmatapelajaran','biodatasiswa.KodeSiswa','=','ambilmatapelajaran.KodeSiswa')
                        ->join('ambilmatapelajarandetail','ambilmatapelajaran.NoPendaftaran','=','ambilmatapelajarandetail.NoPendaftaran')
                        ->join('grupkelas','ambilmatapelajarandetail.KodeGroupKelas','=','grupkelas.KodeGroupKelas')
                        ->join('area','ambilmatapelajaran.KodeArea','=','area.KodeArea')
                        ->select('biodatasiswa.KodeSiswa','biodatasiswa.NamaSiswa','grupkelas.NamaGroup','area.NamaArea')
                        ->first();
      $nilai_siswa = DB::table('biodatasiswa')
                          ->where('biodatasiswa.KodeUser','=',$username)
                          ->join('ambilmatapelajaran','biodatasiswa.KodeSiswa','=','ambilmatapelajaran.KodeSiswa')
                          ->join('ambilmatapelajarandetail','ambilmatapelajaran.NoPendaftaran','=','ambilmatapelajarandetail.NoPendaftaran')
                          ->join('kelas','ambilmatapelajarandetail.KodeKelas','=','kelas.KodeKelas')
                          ->join('reportujian','ambilmatapelajarandetail.NoPendaftaran','=','reportujian.NoPendaftaran')
                          ->join('reportujiandetail','reportujian.KodeReport','=','reportujiandetail.KodeReport')
                          ->join('kelasmodulujian','reportujiandetail.KodeKelas','=','kelasmodulujian.KodeKelas')
                          ->select('kelas.KodeKelas','kelas.NamaKelas','reportujiandetail.MateriUjian','reportujiandetail.StandardNilai','reportujian.Tanggal')
                          ->first();
      //dd($data_siswa);
      if (count($nilai_siswa)>0) {
        return view('halaman_siswa.nilai_siswa')->with([
                                                  'data_siswa'=>$data_siswa,
                                                  'nilai'=>$nilai_siswa
                                                ]);
      }
      else {
        return redirect('/siswa');
      }
      //dd($nilai_siswa);

    }

    public function testimoni()
    {
      return view('halaman_siswa.testimoni');
    }

    public function save_testimoni(Request $request)
    {
      $this->validate($request,[
        'testimoni'=>'required'
      ]);

      $username = Session::get('username');
      $isi_testimoni = $request->testimoni;
      $get_kodesiswa = DB::table('biodatasiswa')
                            ->where('biodatasiswa.KodeUser','=',$username)
                            ->select('biodatasiswa.KodeSiswa')
                            ->first();
      $kode_siswa = $get_kodesiswa->KodeSiswa;

      $get_maxtestimoni = DB::table('testimoni')
                              ->max('KodeTestimoni');
      $no = $get_maxtestimoni+1;
      //dd($kode_siswa);

      if (count($username)>0) {
        DB::table('testimoni')->insert([
                                ['KodeSiswa'=>$kode_siswa,
                                 'KodeTestimoni'=>$no,
                                 'IsiTestimoni'=>$isi_testimoni
                                  ]
                              ]);
        return redirect('/siswa/testimoni')->with('response','OK');
      }
      //else {
      //  return 'no';
      //}
      //DB::table('testimoni')->insert([
      //                        ['KodeSiswa'=>$get_kodesiswa,
      //                         'KodeTestimoni'=>...,
      //                         'IsiTestimoni'=>...,
      //                          ]
      //                      ]);
      //dd($isi_testimoni);
    }

}
