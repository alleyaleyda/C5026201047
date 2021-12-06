@extends('layout.org')
@section('title', "ABSEN PEGAWAI")
@section('content')

	<h3>Data Absen Pegawai</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="idpeg" value="{{ $a->IDPegawai }}"> <br/>
		Tanggal <input type="datetime" required="required" name="tgl" value="{{  $a->Tanggal }}"> <br/>
		Status <input type ="text" textarea required="required" name="status">{{ $a->Status }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
