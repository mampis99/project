<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\userq;

class LoginController extends Controller
{
    public function index()
    {
      return view('login');
    }

    public function postLogin(Request $request)
    {
      $this->validate($request,
      [
        'username' => 'required',
        'password' => 'required',
      ]);

      $username = $request->username;
      $password = $request->password;

      $data = DB::table('User')
                  ->where('Aktif','=',1)
                  ->where('KodeUser','=',$username)
                  ->first();


      $data_pass = Hash::make($data->Password);
      //dd($data_pass);
      if (count($data)>0 && Hash::check($password, $data_pass))
       {
         if ($data->Tipe == 'siswa')
         {
           //dd($nama);
           Session::put('nama',$data->Nama);
           Session::put('username',$data->KodeUser);
           Session::put('password',$password);
           return redirect('/siswa');
         }
         elseif ($data->Tipe == 'admin')
         {
           Session::put('name',$data->Nama);
           return 'ini halaman admin';
         }
         elseif ($data->Tipe == 'guru')
         {
           Session::put('name',$data->Nama);
           return 'ini halaman guru';
         }
         else {
           return 'gagal';
         }
       }
      else
         {
            return redirect('/login');
         }
    }

    public function logout()
    {
      Session::flush();
      return redirect('/');
    }
}
