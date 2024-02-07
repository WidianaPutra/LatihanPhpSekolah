<?php
$result = "";

if (isset($_POST["input"])) {
  $input = $_POST["angka"];
  if ($input >= 90 && $input <= 100) {
    $result = "Anda dapat predikat: A";
  } else if ($input <= 88 && $input >= 80) {
    $result = "Anda dapat predikat: B";
  } else if ($input >= 70 && $input <= 79) {
    $result = "Anda dapat predikat: C";
  } else if ($input >= 60 && $input <= 69) {
    $result = "Anda dapat predikat: D";
  } else if ($input <= 59) {
    $result = "Anda dapat predikat: E";
  } else {
    $result = "Yang anda inputkan tidak valid";
  }
}

if (isset($_POST["input"])) {
  $umur = $_POST[""];
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
  <div class="nilai">
    <h1>Nilai</h1>
    <form action="ui.php" method="POST">
      <input type="text" name="angka">
      <button type="submit" name="input">Kirim</button>
    </form>
    <p>Nilai anda =
      <?= $input ?>
    </p>
    <p>
      <?= $result ?>
    </p>
  </div>

  <div class="sim">
    <form action="ui.php" method="POST">
      <input type="text" name="umur">
      <button name="sim">Cek</button>
    </form>
  </div>
</body>

</html>