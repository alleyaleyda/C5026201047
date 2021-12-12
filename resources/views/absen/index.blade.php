@extends('layout.org')
@section('title', "ABSEN PEGAWAI")
@section('content')

	<h3>Data Absen Pegawai</h3>

	<a href="/absen/input"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover table-bordered align-middle" >
		<tr>
            <th>No</th>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $a->pegawai_nama}}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
                <div class="mb-2 mt-2">
				<a class="btn btn-warning mb-2"href="/absen/edit/{{ $a->ID }}">Edit</a>
				|
				<a class="btn btn-danger mb-2"href="/absen/hapus/{{ $a->ID }}">Hapus</a>
            </div>
			</td>
		</tr>
		@endforeach
	</table>
</div>
{{ $absen->links() }}
@endsection
