<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <a href="?p=siswa">Siswa</a>
    <a href="?p=Rs">Rumah Sakit</a>
  </div>
</body>

</html>
<hr>

<?php
if (isset($_GET['p'])) {
  $query = $_GET['p'];
  if ($query == "siswa")
    return include ("./siswa.php");
  else
    return include ("./rs.php");
}
?>