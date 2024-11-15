<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arif Maulana - Mahasiswa Informatika</title>
  <link rel="stylesheet" href="style.css">
</head>

<?php
include 'variabel.php';
?>

<body>

  <header>

    <img src=".jpg" alt="">
    <h2><?php echo $namaD . ' ' . $namaB; ?></h2>
    <p>Mahasiswa Informatika di <?php echo $kampus; ?></p>
  </header>

  <div>
    <p>Halo! Nama saya <?php echo $namaD . ' ' . $namaB; ?>. Saya seorang mahasiswa di <?php echo $kampus ?>, dengan
      jurusan <?php echo $jurusan ?> dan program studi <?php echo $prodi ?>. Sekarang, saya duduk di kelas
      <?php echo $kelas ?>. Oh ya, Nim saya <?php echo $nim ?>. Senang bisa memperkenalkan diri!</p>
  </div>
</body>

</html>