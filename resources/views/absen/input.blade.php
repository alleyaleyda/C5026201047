@extends('layout.org')
@section('title', "ABSEN PEGAWAI")
@section('content')

	<h3>Data Absen Pegawai</h3>

	<a href="/absen"> Kembali</a>


	<form action="/absen/store"class="form-inline" method="post">
		{{ csrf_field() }}
        <div class="form-group row w-75">
            <div class="col-sm-3 mt-2">
                <label for="IDPegawai" class="col-form-label">Pegawai :</label>
            </div>

            <div class="mx mt-2">
                <select class="form-select mb-3" id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="datetimepicker1" class="col-form-label">Tanggal :</label>
                <div class=' input-group' id='datetimepicker1' data-td-target-input='nearest' data-td-target-toggle='nearest'>
                    <input id='datetimepicker1Input' type='text' class='form-control' name="tgl" data-td-target='#datetimepicker1' required/>
                    <span class='input-group-text' data-td-target='#datetimepicker1' data-td-toggle='datetimepicker'>
                        <span class='fas fa-calendar'></span>
                    </span>
                </div>
            </div>
                <script>
                    new tempusDominus.TempusDominus(document.getElementById('datetimepicker1'), {
                        hooks: {
                            inputFormat: (context, date) => {
                            return moment(date).format('YYYY-MM-DD hh:mm:ss')
                            }
                        }
                    });
                </script>

            <div class="mt-2">
                <label for="IDPegawai" class="col-form-label">Status :</label>
                <div class="mx-4 form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status"  value="H" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Hadir
                    </label>
                </div>
                <div class="mx-3 form check form-check-inline">
                    <input class="form-check-input" type="radio" name="status"  value="T" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                    Tidak Hadir
                    </label>
                </div>
            </div>

            <div class="text-center mt-3">
                <input type="submit" class ="btn btn-primary"value="Simpan Data">
            </div>
    </div>
    </div>
	</form>

@endsection
