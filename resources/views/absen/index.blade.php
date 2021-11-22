<!DOCTYPE html>
<html>
<head>
	<title>Tugas CRUD Absen | Hajdah Aleyda</title>
</head>
<body>


	<h3>Data Absen Pegawai</h3>

	<a href="/absen/input"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>

		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
