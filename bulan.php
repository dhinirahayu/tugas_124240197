<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="stylee.css">

  <style>
    td,
    th {
      padding: 15px;
    }

    th {
      text-align: left;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Dhini Rahayu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontak.html">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Vkubus.php">V.kubus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Lsegitiga.php">Luas Segitiga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bulan.php">Bulan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <br>
  <center>
    <div class="h2">
      <h3>Mencari nama bulan</h3>
    </div>
  </center>
  <br>

  <center>
    <form action="bulan.php" method="post">
      <table>
        <tr>
          <td>Mencari nama bulan</td>
          <td>:</td>
          <td><input type="number" name="bulan"></td>
        </tr>
        <td></td>
        <td></td>
        <td><input class="btn btn-primary" type="submit" value="Hitung"></td>
        </tr>
      </table>
    </form>



    <?php
    $bulan = $_POST['bulan'];
    if ($bulan == 1) {
      echo "sekarang bulan January";
    } elseif ($bulan == 2) {
      echo "sekarang bulan Febuary";
    } elseif ($bulan == 3) {
      echo "sekarang bulan Maret";
    } elseif ($bulan == 4) {
      echo "sekarang bulan April";
    } elseif ($bulan == 5) {
      echo "sekarang bulan Mei";
    } elseif ($bulan == 6) {
      echo "sekarang bulan Juni";
    } elseif ($bulan == 7) {
      echo "sekarang bulan Juli";
    } elseif ($bulan == 8) {
      echo "sekarang bulan Agustus";
    } elseif ($bulan == 9) {
      echo "sekarang bulan September";
    } elseif ($bulan == 10) {
      echo "sekarang bulan Oktober";
    } elseif ($bulan == 11) {
      echo "sekarang bulan November";
    } elseif ($bulan == 12) {
      echo "sekarang bulan Desember";
    } else {
      echo "Masukan angka dengan benar";
    }



    ?>
  </center>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>