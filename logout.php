<?php
session_start();

if(isset($_POST['logout'])){

    session_unset();
    session_destroy();

    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<meta charset="UTF-8">
<title>Logout</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f6f4ff;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.card{
    width:90%;
    max-width:400px;
    background:white;
    padding:30px;
    border-radius:25px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,.1);
}

.icon{
    font-size:80px;
    margin-bottom:15px;
}

h2{
    color:#333;
    margin-bottom:10px;
}

p{
    color:#777;
    margin-bottom:25px;
}

.btn-group{
    display:flex;
    gap:10px;
}

.btn{
    flex:1;
    padding:14px;
    border:none;
    border-radius:12px;
    cursor:pointer;
    font-size:15px;
    font-weight:600;
}

.btn-cancel{
    background:#e5e5e5;
    color:#333;
    text-decoration:none;
    display:flex;
    justify-content:center;
    align-items:center;
}

.btn-logout{
    background:#ff4d4d;
    color:white;
}

</style>
</head>
<body>

<div class="card">

<div class="icon">
<i class="bi bi-box-arrow-right"></i>
</div>

<h2>Keluar Akun?</h2>

<p>
Apakah Anda yakin ingin logout dari aplikasi Catatan Harian?
</p>

<div class="btn-group">

<a href="profil.php" class="btn btn-cancel">
Batal
</a>

<form method="POST" style="flex:1;">

<button
type="submit"
name="logout"
class="btn btn-logout">

Logout

</button>

</form>

</div>

</div>

</body>
</html>