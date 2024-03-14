<?php
$pelanggan = true;
$quantitiy = 1199;
$harga;
$result;

if ($pelanggan)
  return $harga = 300;
if (!$pelanggan) {
  if ($quantitiy < 100)
    return $harga = 325;
  if ($quantitiy < 200 && $quantitiy >= 100)
    return $harga = 300;
  if ($quantitiy > 200)
    return $harga = 275;
}
$test = $pelanggan ? "True" : "False";
echo "<h1>Pelanggan : " . $test . "</h1>";
echo "<h1>Jumlah : $quantitiy</h1>";
echo "<h1>Harga : $harga/Lembar</h1>";
echo "<h1>Total Bayar : RP" . number_format($harga * $quantitiy) . "</h1>";
?>

<style>
* {
  margin: 0;
  padding: 0;
  color: Crimson;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  text-align: center;
}

body {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100vh;
  justify-content: center;
  align-items: center;
}
</style>