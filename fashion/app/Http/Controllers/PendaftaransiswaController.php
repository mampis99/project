<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaransiswaController extends Controller
{
    public function index()
    {
      return view('pendaftaransiswa');
    }

    public function simpan(Request $request)
    {
      $this->validate($request, [
        'nama' => 'required',
        'namapanggilan' => 'required',
        'email' => 'required',
        'kodeuser' => 'required',
        'password' => 'required',
        'tempatlahir' => 'required',
        'tgllahir' => 'required',
        'alamat' => 'required',
        'notelpon' => 'required',
        'propinsi' => 'required',
        'kota' => 'required',
        'namaortu'=> 'required',
        'alamatortu'=> 'required',
        'notelpon_ortu'=> 'required'
      ]);

      $count_user = DB::table('biodatasiswa')->count();
      //$tahun_ini = substr(date('Y'),2,2);
      $tahun_ini = date('Y');
      $bulan_ini = date('m');
      $char1 = "MRC";
      $char2 = "DFT";
      $akt = "0";
      $kd_area = "0";
      //$kode_siswa = $char.sprintf('%03s',$count_user++).$tahun_ini;
      $kode_siswa = $char1."/".$char2."/".$tahun_ini."/".$bulan_ini.sprintf('%04s',$count_user++);
      $status="OPN";
      $tanggal_modif = date('Y-m-d h:i:s');
      $tanggal_daftar = date('Y-m-d');



      DB::table('user')->insert(
        [
          ['KodeUser'=>$request['kodeuser'],
            'Password'=>$request['password'],
            'Nama'=>$request['nama'],
            'Tipe'=>'siswa',
            'Tanggal'=>$tanggal_modif,
            'Aktif'=>$akt,
            'KodeArea'=>$kd_area
          ]
       ]);

      DB::table('biodatasiswa')->insert([
        ['KodeSiswa'=>$kode_siswa,
          'NamaSiswa'=>$request['nama'],
          'NamaPanggilan'=>$request['namapanggilan'],
          'TempatLahir'=>$request['tempatlahir'],
          'Alamat'=>$request['alamat'],
          'NoTelpon'=>$request['notelpon'],
          'NamaOrangtua'=>$request['namaortu'],
          'AlamatOrangtua'=>$request['alamatortu'],
          'NoTelponOrangTua'=>$request['notelpon_ortu'],
          'Status'=>$status,
          'DateModified'=>$tanggal_modif,
          'KodeUser'=>$request['kodeuser'],
          'TanggalLahir'=>$request['tgllahir'],
          'Email'=>$request['email'],
          'Kota'=>$request['kota'],
          'Propinsi'=>$request['propinsi'],
          'JenisKelamin'=>$request['jeniskelamin'],
          'TanggalDaftar'=>$tanggal_daftar,
          'IdReferal'=>$request['id_referal'],
        ]
      ]);
      return redirect('pendaftaransiswa')->with('response','OK');
    }
}
