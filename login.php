<?php
session_start();

if(isset($_SESSION['id_user'])){
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login - Catatan Harian</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    background:linear-gradient(
        135deg,
        #6c4df6,
        #8a6eff
    );
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.container{
    width:100%;
    max-width:420px;
}

.card{
    background:white;
    border-radius:30px;
    padding:35px;
    box-shadow:0 15px 40px rgba(0,0,0,.15);
}

.logo{
    text-align:center;
    font-size:70px;
    margin-bottom:10px;
}

.title{
    text-align:center;
    margin-bottom:5px;
    color:#333;
}

.subtitle{
    text-align:center;
    color:#777;
    margin-bottom:30px;
}

.input-group{
    margin-bottom:18px;
}

.input-group label{
    display:block;
    margin-bottom:8px;
    color:#555;
    font-weight:600;
}

.input-group input{
    width:100%;
    padding:14px;
    border:1px solid #ddd;
    border-radius:14px;
    font-size:15px;
    outline:none;
    transition:.3s;
}

.input-group input:focus{
    border-color:#6c4df6;
}

.btn-login{
    width:100%;
    padding:15px;
    border:none;
    border-radius:15px;
    background:#6c4df6;
    color:white;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:.3s;
}

.btn-login:hover{
    transform:translateY(-2px);
}

.register{
    text-align:center;
    margin-top:20px;
}

.register a{
    text-decoration:none;
    color:#6c4df6;
    font-weight:bold;
}

.footer{
    text-align:center;
    margin-top:20px;
    color:#999;
    font-size:13px;
}

</style>
</head>

<body>

<div class="container">

<div class="card">

<div class="logo">
<i class="bi bi-journal-bookmark-fill"></i>
</div>

<h1 class="title">
Catatan Harian
</h1>

<p class="subtitle">
Simpan cerita dan aktivitas harianmu
</p>

<form action="proses_login.php" method="POST">

<div class="input-group">

<label>Username</label>

<input
type="text"
name="username"
placeholder="Masukkan username"
required>

</div>

<div class="input-group">

<label>Password</label>

<input
type="password"
name="password"
placeholder="Masukkan password"
required>

</div>

<button
type="submit"
class="btn-login">

Masuk

</button>

</form>

<div class="register">

Belum punya akun?

<a href="register.php">
Daftar Sekarang
</a>

</div>

<div class="footer">

© <?= date('Y'); ?> Catatan Harian

</div>

</div>

</div>

</body>
</html>