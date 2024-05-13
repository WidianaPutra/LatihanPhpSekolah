<?php
include ("./data/data_siswa.php");
$pilihan = "" || "Semua";
$selected = 0;
if (isset($_POST["submit"]))
  $pilihan = $_POST['pilihan'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="tailwind.config.js"></script>
  <title>Document</title>
</head>

<body>
  <form action="siswa.php" method="POST" name="form" class="flex w-full justify-center items-center gap-2 h-20">
    <select name="pilihan" id="" class="bg-crimson text-white p-2 ">
      <?php foreach ($JK as $i => $data): ?>
        <option value="<?= $data ?>"><?= $data ?></option>
      <?php endforeach; ?>
    </select>
    <input type="submit" name="submit" class="bg-crimson text-white px-3 py-2 rounded-xl my-2">
  </form>
  <!-- output -->
  <div class="container mx-auto flex w-full justify-center">
    <table class="table-auto border-collapse border border-gray-800">
      <thead>
        <tr>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Absen</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Nama</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Kelas</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">JK</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Email</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data_siswa as $i => $result): ?>
          <?php if ($pilihan == $result['JK'] || $pilihan == "Semua"): ?>
            <tr>
              <td class="px-4 py-2 border border-gray-400"><?= $i + 1; ?></td>
              <td class="px-4 py-2 border border-gray-400"><?= $result['nama']; ?></td>
              <td class="px-4 py-2 border border-gray-400 text-center"><?= $result['Kelas']; ?></td>
              <td class="px-4 py-2 border border-gray-400"><?= $result['JK']; ?></td>
              <td class="px-4 py-2 border border-gray-400"><?= $result['Email']; ?></td>
              <?php $selected++ ?>
            </tr>
          <?php endif; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <h1 class="text-2xl text-center text-crimson p-2">Total Siswa: <?= $selected ?> / <?= count($data_siswa) ?></h1>
</body>

</html>