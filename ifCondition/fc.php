<?php
$pelanggan = true;
$quantitiy = 299;
$harga;
$result;

if ($pelanggan)
  $harga = 300;
else {
  if ($quantitiy < 100) {
    $harga = 325;
  } else if ($quantitiy < 200 && $quantitiy >= 100) {
    $harga = 300;
  } else if ($quantitiy > 200) {
    $harga = 275;
  }
}
echo "<h1>Pelanggan : $pelanggan</h1>";
echo "<h1>Jumlah : $quantitiy</h1>";
echo "<h1>Harga : $harga</h1>";
echo "<h1>Total Bayar : " . number_format($harga * $quantitiy) . "</h1>";
?>