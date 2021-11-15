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
    <title>Tugas 9 Hajdah Aleyda</title>

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
            <h1>Perhitungan Faktorial</h1>
            <div class="container ml-3">
                <div class="row">
                    <div class="col">

                        <form action="fungsi"  method = "post" >
                            @csrf
                            <div class="form-group mt-3 mb-3">
                                <label for="nrp">input angka :</label>
                                <input type="number" name="angka">
                            </div>

                            <div class="form" style="padding-bottom : 10px ; text-align: center;">
                                <button type="submit" class="btn btn-primary" id="submit">Kirim</button>
                                <button type="reset" class="btn btn-warning" id="reset">Reset</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
