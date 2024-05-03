<?php
$motor = ["Desmosedici GP24", "RC213V", "M1", "RC17", "RSGP"];
$jumlahArray = count($motor);
echo $jumlahArray;
echo "<br>"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <select name="motor" id="">
    <?php
    foreach ($motor as $i => $gp) echo "<option name='$i'>$gp</option>";
    ?>
  </select>
</body>

</html>