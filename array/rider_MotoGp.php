<?php
include("./data/MotoGP.php");
$pilihan = "" || "Ducati";
$selected = 0;
if (isset($_POST['submit'])) $pilihan = $_POST['opsi'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="tailwind.config.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    select {
      border-radius: 5px;
    }
  </style>
  <title>Document</title>
</head>

<body>
  <h1 class="text-center text-3xl text-crimson">Pembalap MotoGP Musim 2024</h1>
  <form action="./rider_MotoGp.php" method="POST" class="flex w-full justify-center items-center gap-2">
    <!-- Pabrikan -->
    <span class="text-xl">Pabrikan</span>
    <select name="opsi" class="bg-crimson text-white p-2">
      <?php foreach ($pabrikan as $result) : ?>
        <option value="<?= $result ?>"><?= $result ?></option>
      <?php endforeach ?>
    </select>
    <input type="submit" name="submit" class="bg-crimson text-white px-3 py-2 rounded-xl my-2">
  </form>
  <!--  -->
  <div class="container mx-auto flex w-full justify-center">
    <table class="table-auto border-collapse border border-gray-800">
      <thead>
        <tr>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">No</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Nama</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Pabrikan</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Tim</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Asal</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pembalap as $i => $result) : ?>
          <?php if ($pilihan === "Semua" || $result["pabrikan"] === $pilihan) : ?>
            <tr>
              <td class="px-4 py-2 border border-gray-400"><?= $i + 1; ?></td>
              <td class="px-4 py-2 border border-gray-400"><?= $result['nama']; ?></td>
              <td class="px-4 py-2 border border-gray-400"><?= $result['pabrikan']; ?></td>
              <td class="px-4 py-2 border border-gray-400"><?= $result['tim']; ?></td>
              <td class="px-4 py-2 border border-gray-400"><?= $result['asal']; ?></td>
              <?php $selected++ ?>
            </tr>
          <?php endif; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <h1 class="text-2xl text-center text-crimson p-2">Total Pembalap: <?= $selected ?> / <?= count($pembalap) ?></h1>

</body>

</html>