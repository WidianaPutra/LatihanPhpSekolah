<?php
$nama = "I Putu Surya Widiana Putra";
$alamat = "Ds. Cepaka, Br. Cepaka";
$umur = "16";
$agama = "Kristen";
$jenisKelamin = "Laki Laki";
$email = "olenggamer@gmail.com";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  * {
    padding: 0;
    margin: 0;
    color: crimson;
    font-family: verdana;
  }
  </style>
  <title>BioData</title>
</head>

<body>
  <h1>
    Nama:
    <?= $nama ?>
  </h1>
  <h1>
    Alamat:
    <?= $alamat ?>
  </h1>
  <h1>
    Umur:
    <?= $umur ?>
  </h1>
  <h1>
    Agama:
    <?= $agama ?>
  </h1>
  <h1>
    Jenis Kelamin:
    <?= $jenisKelamin ?>
  </h1>
  <h1>
    Email:
    <?= $email ?>
  </h1>
</body>

</html>