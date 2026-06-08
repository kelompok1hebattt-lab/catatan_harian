<?php

session_start();

if(!isset($_SESSION['id_user'])){
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

$id_user = $_SESSION['id_user'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM users
    WHERE id_user='$id_user'"
);

$user = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<meta charset="UTF-8">
<title>Profil Saya</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f6f4ff;
    padding-bottom:90px;
}

.container{
    max-width:500px;
    margin:auto;
    padding:20px;
}

.header{
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom:25px;
}

.back{
    text-decoration:none;
    color:#333;
    font-size:22px;
}

.profile-card{
    background:white;
    border-radius:25px;
    padding:30px;
    text-align:center;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
}

.avatar{
    width:120px;
    height:120px;
    border-radius:50%;
    margin:auto;
    overflow:hidden;
    border:5px solid #6c4df6;
}

.avatar img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.default-avatar{
    width:100%;
    height:100%;
    background:#e8e1ff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:50px;
}

.username{
    margin-top:15px;
    font-size:24px;
    font-weight:bold;
}

.email{
    color:#777;
    margin-top:5px;
}

.info{
    margin-top:25px;
}

.info-item{
    background:#f8f8ff;
    padding:15px;
    border-radius:15px;
    margin-bottom:12px;
    text-align:left;
}

.label{
    color:#777;
    font-size:13px;
}

.value{
    font-weight:600;
    margin-top:5px;
}

.btn{
    display:block;
    width:100%;
    padding:15px;
    border:none;
    border-radius:15px;
    text-decoration:none;
    text-align:center;
    margin-top:15px;
    font-weight:600;
}

.btn-edit{
    background:#6c4df6;
    color:white;
}

.btn-logout{
    background:#ff4d4d;
    color:white;
}

.bottom-nav{
    position:fixed;
    bottom:0;
    left:0;
    width:100%;
    background:white;
    display:flex;
    justify-content:space-around;
    align-items:center;
    padding:15px;
    box-shadow:0 -3px 15px rgba(0,0,0,.08);
}

.bottom-nav a{
    text-decoration:none;
    color:#444;
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:5px;
}

.add-btn{
    width:60px;
    height:60px;
    border-radius:50%;
    background:#6c4df6;
    color:white !important;
    display:flex !important;
    justify-content:center;
    align-items:center;
    font-size:30px;
    margin-top:-35px;
}

</style>

</head>

<body>

<div class="container">

<div class="header">

<a href="dashboard.php" class="back">
<i class="bi bi-chevron-left"></i>
</a>

<h2>Profil Saya</h2>

<div></div>

</div>

<div class="profile-card">

<div class="avatar">

<?php if(!empty($user['foto_profil'])){ ?>

<img src="assets/uploads/<?= $user['foto_profil']; ?>">

<?php }else{ ?>

<div class="default-avatar">
👤
</div>

<?php } ?>

</div>

<div class="username">
<?= htmlspecialchars($user['username']); ?>
</div>

<div class="email">
<?= htmlspecialchars($user['email']); ?>
</div>

<div class="info">

<div class="info-item">
<div class="label">Username</div>
<div class="value">
<?= htmlspecialchars($user['username']); ?>
</div>
</div>

<div class="info-item">
<div class="label">Email</div>
<div class="value">
<?= htmlspecialchars($user['email']); ?>
</div>
</div>

<div class="info-item">
<div class="label">Bergabung Sejak</div>
<div class="value">
<?= date('d M Y', strtotime($user['created_at'])); ?>
</div>
</div>
</div>

<a href="edit_profil.php" class="btn btn-edit">
Edit Profil
</a>

<a href="logout.php" class="btn btn-logout">
Logout
</a>

</div>

</div>

<nav class="bottom-nav">

<a href="dashboard.php">
<i class="bi bi-house-door-fill"></i>
<span>Beranda</span>
</a>

<a href="tambah_catatan.php" class="add-btn">
<i class="bi bi-plus-lg"></i>
</a>

<a href=<a href="profil.php">
<i class="bi bi-person-circle"></i>
<span>Profil</span>



</nav>

</body>
</html>