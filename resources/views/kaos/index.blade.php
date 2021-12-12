@extends('layout.org')
@section('title', "DATA KAOS")
@section('content')

	<h3>Data Kaos</h3>

	<a href="/kaos/tambah"> + Tambah Data Kaos</a>

	<br/>
	<br/>
    <div class = "container">
        <p class="mt-2 fw-bold"> Cari Kaos </p>
    <form action="/kaos/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Merk .." value="{{ old('cari') }}">
        <input class ="btn btn-outline-primary btn-sm mb-1" type="submit" value="CARI">
    </form>
    </div>
    <br>
	<table class="table table-striped table-hover table-bordered align-middle" >
		<tr>
            <th>No</th>
            <th>Kode Kaos</th>
			<th>Merk Kaos</th>
			<th>Stok Kaos</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($kaos as $k)
		<tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->kodekaos}}</td>
			<td>{{ $k->merkkaos}}</td>
			<td>{{ $k->stockkaos }}</td>
			<td>{{ $k->tersedia }}</td>
			<td>
                <div class="mb-2 mt-2">
                <a class="btn btn-primary mb-2"href="/kaos/detail/{{ $k->kodekaos }}">Detail</a>
                |
				<a class="btn btn-warning mb-2"href="/kaos/edit/{{ $k->kodekaos }}">Edit</a>
				|
				<a class="btn btn-danger mb-2"href="/kaos/hapus/{{ $k->kodekaos }}">Hapus</a>
            </div>
			</td>
		</tr>
		@endforeach
	</table>
    <div style="">
        <h6>Keterangan</h6>
        <p>Y = Tersedia</p>
        <p>N = Tidak Tersedia</p>
    </div>
    {{$kaos ->links()}}
@endsection
