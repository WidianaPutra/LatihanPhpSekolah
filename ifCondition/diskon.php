<?php
$keteranganDiskon = "";
if (isset($_POST["cekDiskon"])) {
  $totalBelanja = $_POST["input"];
  if ($totalBelanja < 4000000 && $totalBelanja >= 2000000) {
    $keteranganDiskon = "Anda dapat diskon Sebesar 10%";
  } else if ($totalBelanja >= 4000000) {
    $keteranganDiskon = "Anda dapat diskon Sebersar 20%";
  } else {
    $keteranganDiskon = "Anda tidak dapat diskon";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="diskon.php" method="POST">
    <input type="text" name="input" value="0">
    <button name="cekDiskon">Cek Diskon</button>
  </form>
  <h1>
    <?php echo "Anda belanja sebesar RP" . number_format($totalBelanja) . ". " . $keteranganDiskon ?>
  </h1>
</body>

</html>