<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class PetugasController extends Controller
{
    function index(){
        $judul ="selamat datang asep";

        $petugas = DB::table('petugas')->get();
        return view('petugas',['TextJudul' =>  $judul, 'petugas' => $petugas]);
    }

    function tampil_petugas(){
        $judul = "selamat datang ditambah petugas petugas";

        return view('isi-petugas',['TextJudul' =>  $judul,]);
    }
    
    function proses_tambah_petugas(Request $request){
        $request->validate([
            'nama' => 'required|min:5'
        ]);
        $nama = $request -> nama;
        $username = $request -> username;
        $password = $request -> password;
        $telp = $request -> telp;
        $level = $request -> level;

        DB::table('petugas')->insert([
            
            'nama_petugas' => $nama,
            'username' => $username,
            'password' => Hash::make ($password),
            'telp' => $telp,
            'level' => $level,
          
        ]);

        return redirect('/petugas');
    }

    function detail_petugas($id)
    {
        // $pengaduan = Pengaduan::where"id_pengaduan",$id->first();
        $petugas = DB::table('petugas')->where('id_petugas', $id)->first();
        return view('detail-petugas', ['petugas' => $petugas]);

    }

    function update_petugas($id)
    {
        $petugas = DB::table('petugas')->where('id_petugas', $id)->first();
        return view('update-petugas', ['petugas' => $petugas]);

    }

    function proses_update_petugas(Request $request, $id){
        $nama = $request->nama_petugas;

        DB::table('petugas')
        ->where('id_petugas', $id)
        ->update(['nama_petugas' => $nama]);

    return redirect('/petugas');
    }

    function petugas_login()
    {
        // return view('/petugas_login');
    }

    function login(Request $request){
        $datalogin = $request->only("username", "password");
        if(Auth::guard("petugas")->attempt($datalogin)){
            return redirect('petugas-home');
        }else {
            return redirect('petugas-login')->with("salah","password salah");
        }
    }

    function logout(){
        Auth::guard('petugas')->logout();

        return redirect('petugas/petugas-login');
    }

    function petugas_home(){
        return view('/petugas-home');
    }
}
