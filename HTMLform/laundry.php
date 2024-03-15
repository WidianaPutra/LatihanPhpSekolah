<?php
if (isset ($_POST['button'])) {
  $namaPelanggan = $_POST['nama_pelanggan'];
  $alamatPelanggan = $_POST['alamat_pelanggan'];
  $jenisKelamin = $_POST['jenis_kelamin'];
  $paket = $_POST['paket'];
  $jenisLayanan = $_POST['jenis_layanan'];
  $beratPakaian = $_POST['berat_pakaian'];

  $total;
  $harga;

  if ($paket === "false") {
    if ($jenisLayanan === "1") {
      $total = 4000 * $beratPakaian;
      $harga = 400;
    }
    if ($jenisLayanan === "2") {
      $total = 5000 * $beratPakaian;
      $harga = 5000;
    }
    if ($jenisLayanan === "3") {
      $total = 4000 * $beratPakaian;
      $harga = 4000;
    }
  }

  if ($paket === "true") {
    if ($jenisLayanan === "1") {
      $total = 6000 * $beratPakaian;
      $harga = 6000;
    }
    if ($jenisLayanan === "2") {
      $total = 8000 * $beratPakaian;
      $harga = 8000;
    }
    if ($jenisLayanan === "3") {
      $total = 6000 * $beratPakaian;
      $harga = 6000;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  * {
    margin: 0;
    padding: 0;
  }

  textarea {
    resize: none;
  }
  </style>
  <title>Document</title>
</head>

<body>
  <h1>WIRA Laundry</h1>
  <form action="./laundry.php" method="post">
    <label for="nama_pelanggan">Nama Pelanggan:</label><br>
    <input type="text" id="nama_pelanggan" name="nama_pelanggan"><br>

    <label for="alamat_pelanggan">Alamat Pelanggan:</label><br>
    <textarea id="alamat_pelanggan" name="alamat_pelanggan"></textarea><br>

    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
    <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
    <label for="laki_laki">Laki-laki</label><br>
    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
    <label for="perempuan">Perempuan</label><br>

    <label for="paket">Pilih Paket:</label><br>

    <select id="paket" name="paket">
      <option value="false">Reguler</option>
      <option value="true">Ekspres</option>
    </select><br>

    <label for="jenis_layanan">Jenis Layanan:</label><br>
    <select id="jenis_layanan" name="jenis_layanan">
      <option value="1">Cuci Kering</option>
      <option value="2">Cuci Setrika</option>
      <option value="3">Setrika</option>
    </select><br>

    <label for="berat_pakaian">Berat Pakaian (kg):</label><br>
    <input type="text" id="berat_pakaian" name="berat_pakaian"><br><br>
    <input type="submit" name="button" value="submit">
    <input type="reset" value="Reset">
  </form>

  <br><br><br><br>
  <!-- output -->
  <h1>Wira Laundry</h1>
  <h1>===========</h1>
  <p>Nama:
    <?= $namaPelanggan ?>
  </p>
  <p>Alamat:
    <?= $alamatPelanggan ?>
  </p>
  <p>Jenis Kelamin:
    <?= $jenisKelamin ?>
  </p>
  <p>Paket:
    <?= $paket === "true" ? "Express" : "Leguler" ?>
  </p>
  <p>----------------------------------------</p>
  <p>Paket:
    <?= $beratPakaian . "kg" ?>
  </p>
  <p>Harga per Kg :
    <?= $harga ?>
  </p>
  <p>Total :
    <?= $total ?>
  </p>
  <p>Diskon :
    <?= $beratPakaian >= 10 ? "10%" : "0%" ?>
  </p>
  <p>Total Bayar :
    <?= $beratPakaian >= "10" ? number_format($total - (0.1 * $total)) : $total ?>
  </p>

</body>

</html>