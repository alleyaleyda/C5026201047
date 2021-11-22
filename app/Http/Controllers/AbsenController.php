<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    //
    public function index(){
        $absenPeg = DB::table('absen')->get();
        return view('absen.index',['absen' => $absenPeg]);
    }

    public function input()
    {

        // memanggil view tambah
        return view('absen.input');

    }

    public function store(Request $request){
        DB::table('absen')->insert([
            'IDPegawai' => $request->idpeg,
            'Tanggal' => $request->tgl,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $absenPeg = DB::table('absen')->where('ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('absen.edit',['absen' => $absenPeg]);

    }
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('absen')->where('ID',$request->id)->update([
            'IDPegawai' => $request->idpeg,
            'Tanggal' => $request->tgl,
            'Status' => $request->status,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('absen')->where('ID',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }
}
