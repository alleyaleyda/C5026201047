@extends('layout.org')
@section('title', "DATA PEGAWAI")
@section('content')

	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <div class = "container mb-1">
        <p class="fw-bold"> Cari Nama Pegawai </p>
    <form action="/pegawai/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        <input class ="btn btn-success btn-sm mb-1" type="submit" value="Cari">
    </form>
    </div>
	<table class="table table-striped table-hover table-bordered align-middle">
		<tr>
            <th>No</th>
			<th>Nama</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>

			<td>
                <div class="mt-2 text-center">
                <a class="btn btn-primary mb-2" href="/pegawai/detail/{{ $p->pegawai_id }}">Details</a>
                |
				<a class="btn btn-warning mb-2" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                |
				<a class="btn btn-danger mb-2" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>

            </div>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}
@endsection
