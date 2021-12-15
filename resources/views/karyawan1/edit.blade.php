@extends('layout.org')
@section('title', "EDIT DATA GAJI")
@section('content')

	<h3 class="mt-2">Edit Data Gaji</h3>

	<a href="/karyawan1"> Kembali</a>

	@foreach($karyawan1 as $m)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
        <div class="form-group row w-75">
            <label for="inputkode" class="col-form-label">NIP :</label>
            <div class="mx mt-2">
              <input type="number" class="form-control" name="id" value="{{ $m->NIP}}"id="inputkode"required="required">
            </div>

            <label for="inputmerk" class="col-sm-4 col-form-label">Nama :</label>
            <div class="mx mt-2">
              <input type="text" class="form-control" name="nama" value="{{ $m->Nama}}"id="inputmerk"required="required">
            </div>

            <label for="inputstok" class="col-sm-4 col-form-label">Pangkat :</label>
            <div class="mx mt-2">
              <input type="text" class="form-control" name="pangkat" value="{{ $m->Pangkat }}" id="inputstok" required="required">
            </div>

            <label for="inputstok" class="col-sm-4 col-form-label">Gaji :</label>
            <div class="mx mt-2">
              <input type="number" class="form-control" name="gaji" value="{{ $m->Gaji }}" id="inputstok" required="required">
            </div>
            <div class=" mt-3 text-center">
                <input type="submit" class ="btn btn-success"value="Simpan Data">
            </div>
        </div>
	</form>
	@endforeach
@endsection
