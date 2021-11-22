<!DOCTYPE html>
<html>
<head>
	<title>Tugas CRUD Absen | Hajdah Aleyda</title>
</head>
<body>


	<h3>Data Absen Pegawai</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="idpeg" required="required"> <br/>
		Tanggal <input type="date" name="tgl" required="required"> <br/>
		Status <textarea name="status" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
