<?php
if (isset ($_POST['submit'])) {
  $op = $_POST['operator'];
  $a1 = number_format($_POST['1']);
  $a2 = number_format($_POST['2']);
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
  <form action="./kalkulator.php" method="POST">
    <input type="text" name="1" value=" ">
    <select name="operator" id="">
      <option value="0">+</option>
      <option value="1">-</option>
      <option value="2">*</option>
      <option value="3">/</option>
      <option value="4">pangkat</option>
    </select>
    <input type="text" name="2" value=" ">
    <input type="submit" name="submit" value="Process">
  </form>
  <h1> Hasil adalah :
    <?php
    if ($op === "0")
      echo $a1 + $a2;
    if ($op === "1")
      echo $a1 - $a2;
    if ($op === "2")
      echo $a1 * $a2;
    if ($op === "3")
      echo $a1 / $a2;
    if ($op === "4")
      echo $a1 ** $a2;
    ?>
  </h1>
</body>

</html>