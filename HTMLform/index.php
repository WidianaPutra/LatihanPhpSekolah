<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
            crimson: "crimson",
            black: "black"
          }
        }
      }
    }
  </script>
  <style>
    input, button, select {
      border: 1px solid black;
    }
  </style>
  <title>Program</title>
</head>

<body>
  <div class="flex justify-center h-20 items-center flex-col">
    <h1>Portofolio</h1>
    <a href="https://github.com/WidianaPutra/LatihanPhpSekolah">=> Code Lebih Lengkap</a>
  </div>
  <div class="flex w-full gap-4 justify-center">
    <a href="?p=bio" class="bg-crimson p-2 text-white">Biodata</a>
    <a href="?p=fc" class="bg-crimson p-2 text-white">FotoCopy</a>
    <a href="?p=kal" class="bg-crimson p-2 text-white">Kalkulator</a>
    <a href="?p=laundry" class="bg-crimson p-2 text-white">Laundr</a>
    <a href="?p=sim" class="bg-crimson p-2 text-white">Sim</a>
  </div>
  <?php 
    if (isset($_GET['p'])) {
      $query = $_GET['p'];
      if ($query === "bio") return include("./biodata.php");
      if($query === 'fc') return include("./fotoCopy.php");
      if ($query === "kal") return include("./kalkulatorS.php");
      if ($query === "laundry") return include("./laundry.php");
      if ($query === "sim") return include("./sim.php");
      else echo "404, not found";
    }
  ?>
</body>

</html>