<?php
$gaji = 3600000;
$anak = 10;
$total_lembur = 1;
$lembur = true;
$keluarga = true;

if ($keluarga && $anak > 1) {
  $gaji = $gaji + 500000 + 1000000;
  $lembur && $gaji = $gaji + (20000 * $total_lembur);
} else if ($keluarga && $anak == 1) {
  $gaji = $gaji + 800000;
  $lembur && $gaji = $gaji + (20000 * $total_lembur);
} else if ($keluarga && $anak < 1) {
  $lembur && $gaji = $gaji + (20000 * $total_lembur);
} else if (!$keluarga && $anak < 1) {
  $lembur && $gaji = $gaji + (20000 * $total_lembur);
}

// echo "Gaji anda adalah " . number_format($gaji - ((10 / 100) * $gaji));
// echo ((10 / 100) * $gaji);

echo $gaji - ($gaji * 0.1);

// err