<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>UTS Hajdah Aleyda</title>

    <style>
        body {
            background: -webkit-repeating-linear-gradient(rgb(162, 210, 255),
                    rgb(254, 249, 239),
                    rgb(255, 134, 94),
                    rgb(254, 228, 64));
            justify-content: center;
            align-items: center;
            display: flex;
            min-height: 100vh;

        }

        .main {
            display: inline-flex;
            box-shadow: 0 2px 10px 10px rgba(0, 0, 0, 0.2);
            background-color: white;
            border-radius: 20px;
        }

        label {
            display: inline-block;
            width: 150px;
        }

        textarea {
            vertical-align: top;
        }

        p {
            color: red;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        h1 {
            margin-left: 70px;
            margin-right: 70px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="signin">
            <p style="margin-left: 30px; color: black; margin-top: 20px;">Hajdah Aleyda <br> 5026201047 <br> PWEB C</p>
            <h1>Form Pendaftaran Kuota Internet</h1>
            <div class="container ml-3">
                <div class="row">
                    <div class="col">

                        <form action="https://www.google.com/" class="was-validated" onsubmit="return validation()">

                            <div class="form-group mt-3 mb-3">
                                <label for="nama">Nama Mahasiswa :</label>
                                <input type="text" id="name" name="nama" required="" minlength="2">
                                <p id="id1"></p>
                            </div>

                            <div class="form-group mt-3 mb-3">
                                <label for="nrp">NRP Mahasiswa :</label>
                                <input type="number" id="nrp_mhs" name="nrp" required="" minlength="10" maxlength="10">
                                <p id="id2"></p>
                            </div>

                            <div class="form-group mt-3 mb-3">
                                <label for="jurusan">Jurusan :</label>
                                <select id="jrs" style="width: 190px;" onchange="validatiion()">
                                    <option value="">(Pilih Jurusan)</option>
                                    <option value="2">Informatika</option>
                                    <option value="3">Teknik Elektro</option>
                                    <option value="4">Sistem Informasi</option>
                                </select>
                                <p id="id3"></p>
                            </div>

                            <div class="form-group mt-3 mb-3">
                                <label for="tlp">No. Telepon :</label>
                                <input type="number" id="tlp" name="tlp" required="" minlength="10">
                                <p id="id4"></p>
                            </div>

                            <div class="form" style="padding-bottom : 10px ; text-align: center;">
                                <button type="submit" class="btn btn-primary" id="submit"
                                    onclick="validation()">Kirim</button>
                                <button type="reset" class="btn btn-warning" id="reset">Reset</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js%22%3E"></script>

    <script>
        function validation() {
            var name = document.getElementById("name").value;
            var nrp_mhs = document.getElementById("nrp_mhs").value;
            var jrs = document.getElementById("jrs").value;
            var tlp = document.getElementById("tlp").value;


            var huruf = /^[A-Za-z\s]+$/;
            var angka = /^[0-9]*$/;

            if (name == '') {
                alert('Please enter your name');
            } else if (!huruf.test(name)) {
                alert('Name must be alphabet characters');
                document.getElementById("name").focus();
                return false;
            } else if (document.getElementById("name").value.length < 1) {
                alert('Name must be more than 1 alphabets');
                document.getElementById("name").focus();
                return false;
            } else if (nrp_mhs == '') {
                alert('Please input your nrp');
                document.getElementById("nrp_mhs").focus();
                return false;
            } else if (!angka.test(nrp_mhs)) {
                alert('NRP field must be numbers characters');
                document.getElementById("nrp_mhs").focus();
                return false;
            } else if (document.getElementById("nrp_mhs").value.length < 10) {
                alert('NRP must be 10 digits');
                document.getElementById("nrp_mhs").focus();
                return false;
            } else if (jrs == '') {
                alert('Please select an option!');
                document.getElementById("jrs").focus();
                return false;
            } else if (tlp == '') {
                alert('Please enter your phone number');
                document.getElementById("tlp").focus();
                return false;
            } else if (!angka.test(tlp)) {
                alert('Phone only numbers characters');
                document.getElementById("tlp").focus();
                return false;
            } else if (document.getElementById("tlp").value.length < 9) {
                alert('Phone number minimum length is 10 digits');
                document.getElementById("tlp").focus();
                return false;
            } else {
                alert('Thank You for the Registration');
                // Redirecting to other page.
                window.location = "https://www.google.com/";
                document.getElementById("name").focus();
                return true;
            }
        }
    </script>
</body>

</html>
