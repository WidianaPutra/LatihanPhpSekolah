<?php
$pilihan = "leguler";
$leguler = 6000;
$ekspress = 10000;
$quantitiy = 8;

if ($pilihan === "leguler") {
  echo "Total RP" . number_format($leguler * $quantitiy);
} else if ($pilihan === "express") {
  echo "Total RP" . number_format($ekspress * $quantitiy);
}

?>