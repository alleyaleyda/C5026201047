<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2pweb');
    }

    function showETS()
    {
        return view('ets');
    }

    function showPerhitungan(Request $request)
    {
        return view('perhitungan');
    }

    function showFungsi()
    {
        return view('fungsi');
    }
}
