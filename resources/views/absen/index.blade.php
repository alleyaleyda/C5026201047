@extends('layout.org')
@section('title', "ABSEN PEGAWAI")
@section('content')

	<h3>Data Absen Pegawai</h3>

	<a href="/absen/input"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover table-bordered align-middle" >
		<tr>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a class="btn btn-warning"href="/absen/edit/{{ $a->ID }}">Edit</a>
				|
				<a class="btn btn-danger"href="/absen/hapus/{{ $a->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection
