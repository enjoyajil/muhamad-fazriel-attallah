<?php
// Tanggal & waktu diambil dari server (zona waktu WIB)
date_default_timezone_set('Asia/Jakarta');

$hari  = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
$bulan = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
          'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

$tanggal = $hari[date('w')] . ', ' . date('j') . ' ' . $bulan[(int) date('n')] . ' ' . date('Y');
$jam     = date('H:i:s') . ' WIB';

$nama     = 'Muhamad Fazriel Attallah';
$nim      = '102022530032';
$fakultas = 'Fakultas Rekayasa Industri';
$prodi    = 'Sistem Informasi';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Personal Web | <?= $nama ?></title>

  <link rel="icon" type="image/jpeg" href="ajil.jpeg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;700&family=Source+Sans+3:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="container">

    <header class="hero">

      <figure>
        <img class="foto" src="ajil.jpeg" alt="Foto profil <?= $nama ?>">
        <figcaption>Foto Profile</figcaption>
      </figure>

      <h1><?= $nama ?></h1>
      <p>Mahasiswa yang sedang belajar membuat website statis dengan HTML dan CSS.</p>

      <table class="info">
        <tbody>
          <tr><th scope="row">Nama</th><td><?= $nama ?></td></tr>
          <tr><th scope="row">NIM</th><td><?= $nim ?></td></tr>
          <tr><th scope="row">Fakultas</th><td><?= $fakultas ?></td></tr>
          <tr><th scope="row">Program Studi</th><td><?= $prodi ?></td></tr>
        </tbody>
      </table>

      <nav aria-label="Sosial media">
        <ul class="sosmed">
          <li><a href="https://x.com/username" target="_blank" rel="noopener noreferrer" title="X">X</a></li>
          <li><a href="https://github.com/username" target="_blank" rel="noopener noreferrer" title="GitHub">GH</a></li>
          <li><a href="https://instagram.com/username" target="_blank" rel="noopener noreferrer" title="Instagram">IG</a></li>
          <li><a href="https://linkedin.com/in/username" target="_blank" rel="noopener noreferrer" title="LinkedIn">in</a></li>
          <li><a href="https://youtube.com/@username" target="_blank" rel="noopener noreferrer" title="YouTube">YT</a></li>
        </ul>
      </nav>
    </header>

    <footer class="rata-tengah">
      <p>Hari ini: <time datetime="<?= date('c') ?>"><?= $tanggal ?>, pukul <?= $jam ?></time></p>
      <p>&copy; <?= date('Y') ?> <?= $nama ?></p>
    </footer>

  </main>
</body>
</html>
