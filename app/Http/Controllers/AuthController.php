<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\petugas;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    function logout(){

        Session::flush();
        Auth::logout();  
        
        return redirect ('login');
        }

    function tampil_register()
    {
        return view('/register');
    }

    function register(Request $request)
    {
        $nik = $request -> nik;
        $nama = $request -> nama;
        $username = $request -> username;
        $password = $request -> password;
        $telepon = $request -> telepon;

        DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $username,
            'password' => Hash::make($request->password),
            'telepon' => $telepon
        ]);

        return redirect('/login');
    }

    function login(Request $request)
    {
        // $datalogin = $request->only("username", "password");
        // if(Auth::attempt($datalogin)){
        //     echo "Berhasil Login";
        // }else {
        //     echo "gagal login";
        // }
        // return redirect('home');
    }
    
    function tampil_login()
    {
        return view('/login');
    }

    
}
