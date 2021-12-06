@extends('layout.org')
@section('title', "ABSEN PEGAWAI")
@section('content')

	<h3 class="mt-2">Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row w-50">
            <label for="inputnama" class="col-sm-4 col-form-label">Nama :</label>
            <div class="col-sm-8 mb-3">
              <input type="text" class="form-control" name="nama" value="{{ $p->pegawai_nama }}"id="inputnama"required="required">
            </div>

            <label for="inputjab" class="col-sm-4 col-form-label">Jabatan :</label>
            <div class="col-sm-8 mb-3">
              <input type="text" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}" id="inputjab" required="required">
            </div>

            <label for="inputumur" class="col-sm-4 col-form-label">Umur :</label>
            <div class="col-sm-8 mb-3">
              <input type="number" class="form-control" name="umur"  value="{{ $p->pegawai_umur }}" id="inputumur" required="required">
            </div>

            <label for="inputalamat" class="col-sm-4 col-form-label">Alamat :</label>
            <div class="col-sm-8 mb-3">
              <textarea class="form-control" name="alamat" id="inputalamat" required="required">{{ $p->pegawai_alamat }}</textarea>
            </div>
            <div class="text-center">
                <input type="submit" class ="btn btn-primary"value="Simpan Data">
            </div>
        </div>
	</form>
	@endforeach
@endsection
