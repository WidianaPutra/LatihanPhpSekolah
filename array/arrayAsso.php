<?php
$pilihan = "";
$pabrikan = ["Ducati", "Aprilia", "KTM", "Yamaha", "Honda"];
$pembalap = [
  ["nama" => "Francesco Bagnaia", "pabrikan" => "Ducati"],
  ["nama" => "Eena Bastianini", "pabrikan" => "Ducati"],
  ["nama" => "Jorge Martin", "pabrikan" => "Ducati"],
  ["nama" => "Franco Morbideli", "pabrikan" => "Ducati"],
  ["nama" => "Alex Marquez", "pabrikan" => "Ducati"],
  ["nama" => "Marc Marquez", "pabrikan" => "Ducati"],
  ["nama" => "Marco bezzecchi", "pabrikan" => "Ducati"],
  ["nama" => "Fabio Digianantonio", "pabrikan" => "Ducati"],
  ["nama" => "Fabio Quartararo", "pabrikan" => "Yamaha"],
  ["nama" => "Alex Rins", "pabrikan" => "Yamaha"],
  ["nama" => "Luca Marini", "pabrikan" => "Honda"],
  ["nama" => "Johan Mir", "pabrikan" => "Honda"],
  ["nama" => "takaaki Nakagami", "pabrikan" => "Honda"],
  ["nama" => "Johan Zarco", "pabrikan" => "Honda"],
  ["nama" => "Alexi Espargaro", "pabrikan" => "Aprilia"],
  ["nama" => "Maverick Vinales", "pabrikan" => "Aprilia"],
  ["nama" => "Raul Fernandes", "pabrikan" => "Aprilia"],
  ["nama" => "Miguel Oliveira", "pabrikan" => "Aprilia"],
  ["nama" => "Jack Miler", "pabrikan" => "KTM"],
  ["nama" => "Brand Binder", "pabrikan" => "KTM"],
  ["nama" => "Agusto Fernandes", "pabrikan" => "KTM"],
  ["nama" => "Pedro Acosta", "pabrikan" => "KTM"],
];

if (isset($_POST['submit'])) {
  $pilihan = $_POST['opsi'];
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
  </style>
  <title>Document</title>
</head>

<body>
  <form action="./arrayAsso.php" method="POST">
    <select name="opsi">
      <?php foreach ($pabrikan as $result) echo "<option value=" . $result . ">$result</option>";
      ?>
    </select>
    <input type="submit" name="submit">
  </form>
  <br>
  <h1>Hasil:</h1>
  <br>
  <?php
  $index = 0;
  foreach ($pembalap as $i => $result) {
    if ($result["pabrikan"] === $pilihan) {
      echo "<h1>Nama: " . $result['nama'] . "</h1>";
      echo "<h1>Pabrikan: " . $result['pabrikan'] . "</h1> <hr>";
      $index++;
    };
  }
  echo "<br> <h2>Total Pembalap: " . count($pembalap) . " Pembalap" . "</h2>";
  echo "<h2>Total pembalap $pilihan: " . $index . "</h2>";
  ?>
</body>

</html>