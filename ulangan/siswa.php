<?php
$pilihan = "" || "Semua";
$selected = 0;
$JK = ["Laki-Laki", "Perempuan", "Semua"];
$data_siswa = [
  ["nama" => "Aloysius Xaviano Radhitya Farelly Fernando", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Radit@gmail.com"],
  ["nama" => "Austin Tan Eagles", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Austin@gmail.com"],
  ["nama" => "Charisteas Abdiel Hambur Kilimandu", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Abdiel@gmail.com"],
  ["nama" => "Daniel Rainhard", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Daniel@gmail.com"],
  ["nama" => "Devon Manggala Putra", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Devon@gmail.com"],
  ["nama" => "Edward Steven Levi Siahaan", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Edu@gmail.com"],
  ["nama" => "I Gede Rajendra Bhakta", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Bhakta@gmail.com"],
  ["nama" => "I Gede Jerikho Putra Nugraha", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Iko@gmail.com"],
  ["nama" => "I Gede Krishna Nanda Sugosa", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Krishna@gmail.com"],
  ["nama" => "I Gusti Ngurah Agung Pradivta Aby Paramarta", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Aby@gmail.com"],
  ["nama" => "I Komang Dede Leondra Suputra Wibawa", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "DedeLeo@gmail.com"],
  ["nama" => "I Komang Edo Wiradana", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "EdoPunny@gmail.com"],
  ["nama" => "I Made Alvin Nathan Nugraha", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Alvin@gmail.com"],
  ["nama" => "I Made Samuel Ulung Prasetya", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "SamuelUlung@gmail.com"],
  ["nama" => "I Made Satria Wiguna", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Satria@gmail.com"],
  ["nama" => "I Nyoman Bagus Arya Sumajaya", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Bagas@gmail.com"],
  ["nama" => "I Nyoman Triadi Swastika", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Triadi@gmail.com"],
  ["nama" => "I Putu Bramanta Surya Permana", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Brahmanta@gmail.com"],
  ["nama" => "I Putu Surya Widiana Putra", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "isuryawidianaputra@gmail.com"],
  ["nama" => "Jadaiah Axelganna Alleluiah Burean", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Jay@gmail.com"],
  ["nama" => "Juan Jonahshia Wibisono", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Juan@gmail.com"],
  ["nama" => "Komang Chrisdieho Anadika Junior", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Diego@gmail.com"],
  ["nama" => "Laura Stefanie Gloria Panjaitan", "JK" => "Perempuan", "Kelas" => "X RPL 1", "Email" => "Laura@gmail.com"],
  ["nama" => "Mikael Serafino Putra Arta", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Miakel@gmail.com"],
  ["nama" => "Ni Kadek Cinthya Vebby Arianti", "JK" => "Perempuan", "Kelas" => "X RPL 1", "Email" => "Cinthya@gmail.com"],
  ["nama" => "Ni Komang Triska Aprilia", "JK" => "Perempuan", "Kelas" => "X RPL 1", "Email" => "Triska@gmail.com"],
  ["nama" => "Ni Made Junita Cahaya Lestari", "JK" => "Perempuan", "Kelas" => "X RPL 1", "Email" => "Junita@gmail.com"],
  ["nama" => "Putu Siwi novianti", "JK" => "Perempuan", "Kelas" => "X RPL 1", "Email" => "Siwi@gmail.com"],
  ["nama" => "Sharon Andrea", "JK" => "Perempuan", "Kelas" => "X RPL 1", "Email" => "Sharon@gmail.com"],
  ["nama" => "Yanti K. Sopacua", "JK" => "Perempuan", "Kelas" => "X RPL 1", "Email" => "Yanti@gmail.com"],
  ["nama" => "Yonatan Fernando Misa", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Nando@gmail.com"],
  ["nama" => "Steven Julius Hendry", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Stipen@gmail.com"],
  ["nama" => "Banyu...", "JK" => "Laki-Laki", "Kelas" => "X RPL 1", "Email" => "Banyu@gmail.com"],
];
if (isset($_POST["submit"]))
  $pilihan = $_POST['pilihan'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="tailwind.config.js"></script>
  <title>Document</title>
</head>

<body>
  <form action="siswa.php" method="POST" name="form" class="flex w-full justify-center items-center gap-2 h-20">
    <select name="pilihan" id="" class="bg-crimson text-white p-2 ">
      <?php foreach ($JK as $i => $data): ?>
      <option value="<?= $data ?>"><?= $data ?></option>
      <?php endforeach; ?>
    </select>
    <input type="submit" name="submit" class="bg-crimson text-white px-3 py-2 rounded-xl my-2">
  </form>
  <!-- output -->
  <div class="container mx-auto flex w-full justify-center">
    <table class="table-auto border-collapse border border-gray-800">
      <thead>
        <tr>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Absen</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Nama</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Kelas</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">JK</th>
          <th class="px-4 py-2 bg-gray-200 border border-gray-400 text-crimson">Email</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data_siswa as $i => $result): ?>
        <?php if ($pilihan == $result['JK'] || $pilihan == "Semua"): ?>
        <tr>
          <td class="px-4 py-2 border border-gray-400"><?= $i + 1; ?></td>
          <td class="px-4 py-2 border border-gray-400"><?= $result['nama']; ?></td>
          <td class="px-4 py-2 border border-gray-400 text-center"><?= $result['Kelas']; ?></td>
          <td class="px-4 py-2 border border-gray-400"><?= $result['JK']; ?></td>
          <td class="px-4 py-2 border border-gray-400"><?= $result['Email']; ?></td>
          <?php $selected++ ?>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <h1 class="text-2xl text-center text-crimson p-2">Total Siswa: <?= $selected ?> / <?= count($data_siswa) ?></h1>
</body>

</html>