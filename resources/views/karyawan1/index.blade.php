@extends('layout.org')
@section('title', "DATA GAJI")
@section('content')

	<h3>Data Gaji</h3>

	<a href="/karyawan1/tambah"> + Tambah Data Gaji</a>

	<br/>
	<br/>
    <br>
	<table class="table table-striped table-hover table-bordered align-middle" >
		<tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $m)
		<tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $m->NIP}}</td>
			<td>{{ $m->Nama}}</td>
			<td>{{ $m->Pangkat }}</td>
            <td>{{ number_format($m->Gaji, 0, ',', '.') }}</td>
			<td>
                <div class="mb-2 mt-2">
                <a class="btn btn-primary mb-2"href="/karyawan1/detail/{{ $m->NIP}}">Detail</a>
                |
				<a class="btn btn-warning mb-2"href="/karyawan1/edit/{{ $m->NIP }}">Edit</a>
            </div>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $karyawan1->links() }}
@endsection
