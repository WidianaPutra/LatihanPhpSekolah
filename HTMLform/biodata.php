<?php
if (isset ($_POST['button'])) {
  $nama_siswa = $_POST['nama_siswa'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    form input,
    form textarea,
    select {
      margin: 10px;
      border: 2px solid black;
      padding: 5px 2px;
    }

    h1 {
      text-align: center;
    }
  </style>
  <title> Latihan Input PHP</title>
</head>

<body>
  <div class="container flex w-full h-screen justify-center items-center flex-col">
    <form action="biodata.php" method="POST" class="bg-crimson p-5 gap-5 rounded-3xl">
      <!-- nama siswa -->
      <label for="">Nama Siswa</label>
      <input type="text" name="nama_siswa" placeholder="Nama Siswa">
      <!-- textarea -->
      <br>
      <label for="">Alamat Siswa</label>
      <textarea name="alamat" style="resize: none;" placeholder="alamat siswa"></textarea>
      <br>
      <!-- jenis kelamin -->
      <label for="">jenis kelamin</label>
      <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
      <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
      <br>
      <!-- agama -->
      <label for="">Agama</label>
      <select name="agama">
        <option value="Kristen" id="">Kristen</option>
        <option value="Islam" id="">Islam</option>
        <option value="Kat" id="">Katotik</option>
        <option value="Hindu" id="">Hindu</option>
        <option value="Buddha" id="">Buddha</option>
        <option value="Konguchu" id="">Konghucu</option>
      </select>
      <br>
      <!-- button -->
      <div class="button m-5">
        <input type="submit" value="Procces" name="button" class="bg-yellow px-5 py-2 rounded-2xl">
        <input type="reset" value="Ulang" class="bg-yellow px-5 py-2 rounded-2xl">
      </div>
      <br>
    </form>

    <div class="output">
      <h1>Nama :
        <?= $nama_siswa ?>
      </h1>
      <h1>Alamat :
        <?= $alamat ?>
      </h1>
      <h1>Jenis Kelamin :
        <?= $jenis_kelamin ?>
      </h1>
      <h1>Agama :
        <?= $agama ?>
      </h1>
    </div>
  </div>


</body>

</html>