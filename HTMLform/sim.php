<?php
$message = "";
if (isset($_POST['process'])) {
  $name = $_POST['nama'];
  $umur = $_POST['umur'];
  if (intval($_POST['umur']) < 17)
    $message = "maaf anda masih dibawah umur";
  else
    $message = "Anda sudah bisa membuat SIM";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMP</title>
</head>

<body>
  <form action="./sim.php" method="POST">
    <label for="">Nama</label>
    <input type="text" name="nama"><br>
    <label for="">umur</label>
    <input type="text" name="umur">
    <input type="submit" name="process">
    <h1>nama:
      <?= $name ?>
    </h1>
    <h1>Umur :
      <?= $umur ?>
    </h1>
    <h1>
      <?= $message ?>
    </h1>
  </form>
</body>

</html>