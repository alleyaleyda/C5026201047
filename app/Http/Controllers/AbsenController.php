<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    //
    public function index(){
        //$absenPeg = DB::table('absen')->get();
        //$absenPeg = DB::table('absen')->paginate(5);
        $absenPeg = DB::table('absen')
        ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
        ->paginate(3);
        return view('absen.index',['absen' => $absenPeg]);
    }

    public function input()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        // memanggil view tambah
        return view('absen.input',['pegawai' => $pegawai] );

    }

    public function store(Request $request){
        DB::table('absen')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->tgl,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }

    public function edit($id)
    {

        // mengambil data absen berdasarkan id yang dipilih
        $absenPeg = DB::table('absen')->where('ID', $id)->get();

        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

        // passing data absen yang didapat ke view update.blade.php
        return view('absen.edit', ['absen' => $absenPeg, 'pegawai' => $pegawai]);

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
