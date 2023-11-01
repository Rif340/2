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

class PengaduanController extends Controller
{
    function index()
    {
        $judul = "Selamat Datang";
        $pengaduan = pengaduan::all();

        return view('home', ['TextJudul' =>  $judul, 'pengaduan' => $pengaduan]);
        // $pengaduan = DB::table('pengaduan')->get();
    }

    function tampil_pengaduan()
    {
        $judul = "selamat datang asep";

        return view('isi-pengaduan', ['TextJudul' =>  $judul,]);
    }

    function proses_tambah_pengaduan(Request $request)
    {
        $nama_foto=$request->foto->getClientOriginalName();

        $request->validate([
            'isi_laporan' => 'required|min:5'
        ]);
      
        $request->foto->storeAs('public/image',$nama_foto);

        $isi_pengaduan = $request->isi_laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('y-m-d'),
            'nik' => '123',
            'isi_laporan' => $isi_pengaduan,
            'foto' => $request->foto->getClientOriginalName(),
            'status' => '0'
        ]);

        return redirect('/home');
    }

    function hapus($id)
    {
        echo $id;
        $deleted = DB::table('pengaduan')->where('id_pengaduan', $id)->delete();
        if ($deleted) {
            return redirect('/home');
        }
    }

    function detail_pengaduan($id)
    {
        // $pengaduan = Pengaduan::where"id_pengaduan",$id->first();
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        return view('detail-pengaduan', ['pengaduan' => $pengaduan]);

    }

    function update_pengaduan($id)
    {
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        return view('update-pengaduan', ['pengaduan' => $pengaduan]);

    }

    function proses_update_pengaduan(Request $request, $id){
        $isi_laporan = $request->isi_laporan;

        DB::table('pengaduan')
        ->where('id_pengaduan', $id)
        ->update(['isi_laporan' => $isi_laporan]);

    return redirect('/home');
    }
}
