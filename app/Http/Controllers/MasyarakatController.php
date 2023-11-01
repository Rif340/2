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

class MasyarakatController extends Controller
{
    function index(){
        $judul ="selamat datang asep";

        $masyarakat = DB::table('masyarakat')->get();
        return view('masyarakat',['TextJudul' =>  $judul, 'masyarakat' => $masyarakat]);
    }

    function tampil_masyarakat(){
        $judul = "selamat datang ditambah masyarakat asep";

        return view('isi-masyarakat',['TextJudul' =>  $judul,]);
    }
    function proses_tambah_masyarakat(Request $request){
        $request->validate([
            'nik' => 'required|min:5'
        ]);
        $nik = $request -> nik;
        $nama = $request -> nama;
        $username = $request -> username;
        $password = $request -> password;
        $telepon = $request -> telepon;

        DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'telepon' => $telepon
        ]);

        return redirect('/masyarakat');
    }

    function hapus($nik)
    {
        echo $nik;
        $deleted = DB::table('masyarakat')->where('nik', $nik)->delete();
        if ($deleted) {
            return redirect('/masyarakat');
        }
    }

    function detail_masyarakat($nik)
    {
        // $pengaduan = Pengaduan::where"id_pengaduan",$id->first();
        $masyarakat = DB::table('masyarakat')->where('nik', $nik)->first();
        return view('detail-masyarakat', ['masyarakat' => $masyarakat]);

    }

    function update_masyarakat($nik)
    {
        $masyarakat = DB::table('masyarakat')->where('nik', $nik)->first();
        return view('update-masyarakat', ['masyarkat' => $masyarakat]);

    }

    function proses_update_masyarakat(Request $request, $nik){
        $nama = $request->nama;

        DB::table('masyarakat')
        ->where('nik', $nik)
        ->update(['nama' => $nama]);

    return redirect('/masyarakat');
    }
}
