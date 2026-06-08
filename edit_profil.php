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
<head>
<meta charset="UTF-8">
<title>Edit Profil</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f6f4ff;
}

.container{
    max-width:500px;
    margin:auto;
    padding:20px;
}

.card{
    background:white;
    padding:25px;
    border-radius:25px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
}

h2{
    margin-bottom:20px;
}

.avatar{
    text-align:center;
    margin-bottom:20px;
}

.avatar img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    border:4px solid #6c4df6;
}

label{
    display:block;
    margin-top:15px;
    margin-bottom:8px;
    font-weight:600;
}

input{
    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:12px;
}

.btn{
    width:100%;
    margin-top:25px;
    padding:15px;
    border:none;
    border-radius:15px;
    background:#6c4df6;
    color:white;
    cursor:pointer;
    font-size:16px;
}

.back{
    text-decoration:none;
    color:#333;
    font-size:22px;
}

</style>

</head>

<body>

<div class="container">

<a href="profil.php" class="back">← Kembali</a>

<br><br>

<div class="card">

<h2>Edit Profil</h2>

<div class="avatar">

<?php if(!empty($user['foto_profil'])){ ?>

<img src="assets/uploads/<?= $user['foto_profil']; ?>">

<?php } ?>

</div>

<form
action="update_profil.php"
method="POST"
enctype="multipart/form-data">

<label>Foto Profil</label>

<input
type="file"
name="foto_profil">

<label>Username</label>

<input
type="text"
name="username"
value="<?= $user['username']; ?>"
required>

<label>Email</label>

<input
type="email"
name="email"
value="<?= $user['email']; ?>"
required>

<button
type="submit"
class="btn">

Simpan Perubahan

</button>

</form>

</div>

</div>

</body>
</html>