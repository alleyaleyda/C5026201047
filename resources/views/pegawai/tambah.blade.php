@extends('layout.org')
@section('title', "ABSEN PEGAWAI")
@section('content')
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
    <div class="container">
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row w-50">
            <label for="inputnama" class="col-sm-4 col-form-label">Nama :</label>
            <div class="col-sm-8 mb-3">
              <input type="text" class="form-control" name="nama"id="inputnama"required="required">
            </div>

            <label for="inputjab" class="col-sm-4 col-form-label">Jabatan :</label>
            <div class="col-sm-8 mb-3">
              <input type="text" class="form-control" name="jabatan" id="inputjab" required="required">
            </div>

            <label for="inputumur" class="col-sm-4 col-form-label">Umur :</label>
            <div class="col-sm-8 mb-3">
              <input type="number" class="form-control" name="umur" id="inputumur" required="required">
            </div>

            <label for="inputalamat" class="col-sm-4 col-form-label">Alamat :</label>
            <div class="col-sm-8 mb-3">
              <textarea class="form-control" name="alamat" id="inputalamat" required="required"></textarea>
            </div>
            <div class="text-center">
                <input type="submit" class ="btn btn-primary"value="Simpan Data">
            </div>
        </div>
	</form>
</div>
@endsection
