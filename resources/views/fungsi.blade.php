<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="alert alert-primary">
    <h2>Your Result : </h2>
    <div class="row mt-3">
                <div class="col-5">
                    <label>Hasil Faktorial :</label>
                </div>
                <div class="col-5">
                    <?php
                    $faktorial = $_POST["angka"] ;
                    function faktorial($faktorial){ //function : untuk membungkus proses/ menuliskan fungsi agar bisa berjalan pada php ; // faktorial($faktorial) -> parameter
                        if ($faktorial > 1) {
                            return $faktorial * faktorial($faktorial - 1);
                          } else if ($faktorial == 0) {
                            return 1;
                          } else {
                            return $faktorial;
                        }
                    }
                 echo faktorial($faktorial); //echo : untuk menampilkan statement program di layar
                ?>
                </div>
            </div>
  </div>
  </div>
</body>
</html>
