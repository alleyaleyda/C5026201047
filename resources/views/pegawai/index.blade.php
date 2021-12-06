@extends('layout.org')
@section('title', "ABSEN PEGAWAI")
@section('content')

	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover table-bordered align-middle">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <div class="mt-2">
				<a class="btn btn-warning mb-2" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                |
				<a class="btn btn-danger mb-2" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
            </div>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
