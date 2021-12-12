@extends('layout.org')
@section('title', "EDIT DATA KAOS")
@section('content')

	<h3 class="mt-2">Detail Data Kaos</h3>

	<a href="/kaos"> Kembali</a>

	@foreach($kaos as $k)
        <div class="form-group row w-50">

            <label for="inputkode" class="col-sm-5 col-form-label">Kode Kaos :</label>
            <div class="col-sm-5 mb-3">
                <label class="col-sm-4 col-form-label">{{ $k->kodekaos }}
            </div>


            <label for="inputmerk" class="col-sm-5 col-form-label">Merk Kaos :</label>
            <div class="col-sm-5 mb-3">
                <label class="col col-form-label">{{ $k->merkkaos }}
            </div>



            <label for="inputstok" class="col-sm-5 col-form-label">Stok :</label>
            <div class="col-sm-5 mb-3">
                <label class="col col-form-label">{{ $k->stockkaos }}
            </div>


            <div class="mt-2">
                <label for="inputsedia" class="col-form-label">Tersedia :</label>
                <div class="form-check form-check-inline">
                    <label class="mx-3 col-sm-2">{{ $k->tersedia }}
            </div>
            </div>
	@endforeach
@endsection
