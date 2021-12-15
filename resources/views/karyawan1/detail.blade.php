@extends('layout.org')
@section('title', "DETAIL DATA GAJI")
@section('content')

	<h3 class="mt-2">Detail Data Gaji</h3>

	<a href="/karyawan1"> Kembali</a>

	@foreach($karyawan1 as $m)
        <div class="form-group row w-50">

            <label for="inputkode" class="col-sm-5 col-form-label">NIP:</label>

            <div class="col-sm-5 mb-3">
                <label class="col-sm-4 col-form-label">{{$m->NIP}}
            </div>


            <label for="inputmerk" class="col-sm-5 col-form-label">Nama:</label>

            <div class="col-sm-5 mb-3">
                <label class="col col-form-label">{{ $m->Nama}}
            </div>



            <label for="inputstok" class="col-sm-5 col-form-label">Pangkat :</label>

            <div class="col-sm-5 mb-3">
                <label class="col col-form-label">{{ $m->Pangkat }}
            </div>


            <div class="mt-2">
                <label for="inputsedia" class="col-form-label">Gaji:</label>
                <div class="form-check form-check-inline">
                    <label class="mx-3 col-sm-2"> {{ $m->Gaji }}
            </div>
            </div>
	@endforeach
@endsection
