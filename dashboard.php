<?php

session_start();

if(!isset($_SESSION['id_user'])){
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

$id_user = $_SESSION['id_user'];

$catatan = mysqli_query(
$conn,
"SELECT *
FROM catatan
WHERE id_user='$id_user'
AND status='aktif'
ORDER BY tanggal DESC
LIMIT 5"
);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>

<div class="container">

<div class="header">

<div>
<h2>Halo, <?= $_SESSION['username']; ?> 👋</h2>
<p>Selamat datang kembali</p>
</div>

<div class="notif">
🔔
</div>

</div>

<div class="menu-grid">

<a href="tambah_catatan.php" class="menu-card tambah">
    <i class="bi bi-plus-circle-fill"></i>
    <span>Tambah</span>
</a>

<a href="semua_catatan.php" class="menu-card semua">
    <i class="bi bi-journal-bookmark-fill"></i>
    <span>Semua</span>
</a>

<a href="profil.php" class="menu-card profil">
    <i class="bi bi-person-circle"></i>
    <span>Profil</span>
</a>

<a href="logout.php" class="menu-card logout">
    <i class="bi bi-box-arrow-right"></i>
    <span>Logout</span>
</a>

</div>

<h3>Catatan Terbaru</h3>

<?php while($row = mysqli_fetch_assoc($catatan)){ ?>

<div class="note-card">

<h4><?= $row['judul']; ?></h4>

<p>
<?= substr($row['isi_catatan'],0,120); ?>
</p>

<div class="note-footer">

<span>
<i class="bi bi-calendar3"></i>
<?= $row['tanggal']; ?>
</span>

<span>
<?= $row['mood']; ?>
</span>

</div>

</div>

<?php } ?>

</div>

<nav class="bottom-nav">

<a href="dashboard.php">
<i class="bi bi-house-door-fill"></i>
<span>Beranda</span>
</a>

<a href="tambah_catatan.php" class="add-btn">
<i class="bi bi-plus-lg"></i>
</a>

<a href="profil.php">
<i class="bi bi-person-circle"></i>
<span>Profil</span>
</a>


</nav>

</body>
</html>