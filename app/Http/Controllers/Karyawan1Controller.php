<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan1Controller extends Controller
{
    //
    public function index(){
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();

        //paginate
        //$kaos = DB::table('kaos')->get();
        $karyawan1 = DB::table('karyawan1')->paginate(3);

    	return view('karyawan1.index',['karyawan1' => $karyawan1]);
    }
    public function edit($id)
    {

        $karyawan1 = DB::table('karyawan1')->where('NIP',$id)->get();

        return view('karyawan1.edit',['karyawan1' => $karyawan1]);

    }
    public function update(Request $request)
    {
        DB::table('karyawan1')->where('NIP',$request->id)->update([
            'NIP' => $request->id,
            'Nama' => $request->nama,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji
        ]);
        return redirect('/karyawan1');
    }
    public function view($id){
        //ambil data berdasarkan id yang terpilih
        $karyawan1 = DB::table('karyawan1')->where('NIP',$id)->get();
        //passing data pegawai yang didapat ke view edit.blade.php
        return view('karyawan1.detail',['karyawan1' => $karyawan1]);
    }
}
