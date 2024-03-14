<?php
$tanggal = date("Y-m-d H");
if (isset($_POST['button'])) {
  $name = $_POST['name'];
  $alamat = $_POST['alamat'];
  $status = $_POST['status'];
  $quantity = intval($_POST['jumlah_lembar']);
  $total = $status === "true" ? $quantity * 300 : $quantity * 500;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    h1 {
      text-align: center;
    }

    .form {
      width: 100%;
      display: flex;
      justify-content: center;
    }

    form {
      display: flex;
      justify-content: center;
      flex-direction: column;
    }

    * {
      margin: 0;
      padding: 0;
    }

    .detail {
      text-align: center;
    }

    textarea {
      resize: none;
    }
  </style>
  <title>Document</title>
</head>

<body>
  <h1>FC</h1>
  <div class="form">
    <form action="./fotoCopy.php" method="POST">
      <label for="">Nama</label>
      <input type="text" name="name" placeholder="Nama">
      <br>
      <label for="">Alamat</label>
      <textarea name="alamat" placeholder="Alamat"></textarea>
      <br>
      <label for="">Status</label>
      <br>

      <div class="member">
        <input type="radio" name="status" value="true" id="member">
        <label for="member">Member</label>
      </div>
      <div class="nonmember">
        <input type="radio" name="status" id="non-member" value="false">
        <label for="non-member">Non-Member</label>
      </div>

      <br>
      <label for="">jumlah lembar</label>
      <input type="text" name="jumlah_lembar">
      <br>
      <input type="submit" value="Sumbit" name="button">
      <input type="reset" value="Reset">
    </form>
  </div>
  <br><br><br><br>
  <!-- output -->
  <div class="detail">
    <h1>=========</h1>
    <p>Tanggal:
      <?= $tanggal ?>
    </p>
    <p>Nama:
      <?= $name ?>
    </p>
    <p>Alamat:
      <?= $alamat ?>
    </p>
    <p>Status:
      <?= $status === "true" ? "Member" : "Non-Member" ?>
    </p>
    <p>jumlah lembar:
      <?= number_format($quantity) ?>
    </p>
    <p>Harga / lembar:
      <?= $status === "true" ? "300" : "500" ?>
    </p>
    <p>----------------------------</p>
    <p>Total:
      <?= "Rp" . number_format($total) ?>
    </p>
    <p>Diskon:
      <?= $quantity >= 500 ? "15%" : "0%" ?>
    </p>
    <h1>=========</h1>
    <p>Total Bayar:
      <?= "Rp" . $quantity >= 500 ? number_format($total - ((($quantity >= 500 ? 15 : 0) / 100) * $total)) : $total ?>
    </p>
  </div>

</body>

</html>