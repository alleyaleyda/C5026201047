<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaosController extends Controller
{
    //
    public function index(){
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();

        //paginate
        //$kaos = DB::table('kaos')->get();
        $kaos = DB::table('kaos')->paginate(3);

    	return view('kaos.index',['kaos' => $kaos]);
    }
    public function tambah()
    {


        return view('kaos.tambah');

    }
    public function store(Request $request)
    {

        DB::table('kaos')->insert([
            'kodekaos' => $request->kode,
            'merkkaos' => $request->merk,
            'stockkaos' => $request->stok,
            'tersedia' => $request->sedia,
        ]);

        return redirect('/kaos');
    }
    public function edit($id)
    {

        $kaos = DB::table('kaos')->where('kodekaos',$id)->get();

        return view('kaos.edit',['kaos' => $kaos]);

    }
    public function update(Request $request)
    {
        DB::table('kaos')->where('kodekaos',$request->id)->update([
            'kodekaos' => $request->id,
            'merkkaos' => $request->merk,
            'stockkaos' => $request->stok,
            'tersedia' => $request->sedia
        ]);
        return redirect('/kaos');
    }
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('kaos')->where('kodekaos',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/kaos');
    }
    public function cari(Request $request){
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kaos = DB::table('kaos')
        ->where('merkkaos','like',"%".$cari."%")
        ->orWhere('tersedia','like',"%".$cari."%")
		->paginate(5); // like gabisa =, harus

    		// mengirim data pegawai ke view index
		return view('kaos.index',['kaos' => $kaos]);
	}
    public function view($id){
        //ambil data berdasarkan id yang terpilih
        $kaos = DB::table('kaos')->where('kodekaos',$id)->get();
        //passing data pegawai yang didapat ke view edit.blade.php
        return view('kaos.detail',['kaos' => $kaos]);
    }
}
