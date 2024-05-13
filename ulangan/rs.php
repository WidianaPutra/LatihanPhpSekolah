<?php
$total_harga;
$polis = ["Umum", "Gigi", "Kulit", "Mata"];
if (isset($_POST['submit'])) {
  $nama_pasien = $_POST['nama'];
  $poli = $_POST['poli'];
  $bpjs = (int) (number_format($_POST['bpjs']) == 1) ? "Ya" : "Tidak";
  $obat = $_POST['obat'];
  $harga_obat = (int) number_format($_POST['biaya']) * 1000;
}
switch ($poli) {
  case "Umum":
    $total_harga = 150_000;
    break;
  case "Gigi":
    $total_harga = 200_000;
    break;
  case "Kulit":
    $total_harga = 170_000;
    break;
  case "Mata":
    $total_harga = 250_000;
    break;
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Program Rumah Sakit</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="./tailwind.config.js"></script>
  <style>
  * {
    padding: 0;
    margin: 0;
  }

  input,
  select {
    border: 2px solid black;
  }
  </style>
</head>

<body>
  <h2>Masukkan Biodata Pasien</h2>
  <form method="POST" action="rs.php" class="space-y-4">
    <div class="flex flex-col"> <label for="nama" class="mb-2">Nama Pasien:</label> <input type="text" name="nama"
        required class="border border-gray-300 rounded px-3 py-2">
    </div>

    <div class="flex flex-col"> <label for="poli" class="mb-2">Poli yang Dituju:</label> <select name="poli" required
        class="border border-gray-300 rounded px-3 py-2">
        <?php foreach ($polis as $poli): ?>
        <option value="<?= $poli ?>">Poli <?= $poli ?></option>
        <?php endforeach ?>
      </select>
    </div>

    <div class="flex items-center"> <label for="bpjs" class="mr-2">Menggunakan BPJS?</label>
      <input type="radio" name="bpjs" value="1" class="mr-2"> Ya
      <input type="radio" name="bpjs" value="0" checked class="mr-2"> Tidak
    </div>

    <div class="flex flex-col"> <label for="obat" class="mb-2">Nama Obat dan Biaya Obat:</label>
      <div class="flex space-x-2"> <input type="text" name="obat" placeholder="Nama Obat" required
          class="border border-gray-300 rounded px-3 py-2 flex-grow">
        <input type="text" name="biaya" placeholder="Biaya Obat" required
          class="border border-gray-300 rounded px-3 py-2">
      </div>
    </div>

    <input type="submit" value="Submit" name="submit"
      class="bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-700">
  </form>

  <!-- ouotput -->
  <div class="f-contaier w-full h-max flex justify-center">
    <div class="w-1/4 bg-gray-100 h-max p-2 rounded-xl">
      <h1 class="text-center text-2xl">RS. Sejahtera Indah</h1>
      <p class="text-center text-base">Jl. Indah, No.1, Denpasar Utara</p>
      <p>--------------------------------------------------------</p>
      <p class="text-lg">Waktu: <?= date("Y-m-d H:i:s") ?></p>
      <p class="text-lg">Nama: <?= $nama_pasien ?></p>
      <p class="text-lg">Poli: <?= $poli ?></p>
      <p class="text-lg">BPJS: <?= $bpjs ?></p>
      <p class="text-lg">Nama Obat: <?= $obat ?></p>
      <p class="text-lg">Harga Obat: Rp<?= $harga_obat ?></p>
      <p>--------------------------------------------------------</p>
      <p class="text-lg">Total: <?= $total_harga + $harga_obat ?></p>
      <p class="text-lg">Total bayar:
        <?= ($bpjs == "Ya") ? "RP" . number_format(($total_harga + $harga_obat) - 50000) : "RP" . number_format($total_harga + $harga_obat) ?>
      </p>
      <p>--------------------------------------------------------</p>
      <h1 class="text-center text-2xl">Terimakasih</h1>
    </div>
  </div>
</body>

</html>