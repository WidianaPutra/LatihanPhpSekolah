<?php
function SIM_Condition($myAge)
{
  if ($myAge >= 17) {
    echo "Anda Sudah Bisa Membuat SIM <br>";
  } else {
    echo "Maaf Anda Belum Bisa Membuat SIM <br>";
  }
}

function Score_Condition($isScore)
{
  if ($isScore >= 90 && $isScore <= 100) {
    echo "Nilai anda A";
  } else if ($isScore <= 88 && $isScore >= 80) {
    echo "Nilai anda B";
  } else if ($isScore >= 70 && $isScore <= 79) {
    echo "Nilai anda C";
  } else if ($isScore >= 60 && $isScore <= 69) {
    echo "Nilai anda D";
  } else if ($isScore <= 59) {
    echo "Nilai anda E";
  } else {
    echo "Nilai yang anda inputkan salah";
  }
}

SIM_Condition(15);
Score_Condition(100);
?>