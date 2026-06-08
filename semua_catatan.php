<?php

session_start();

if(!isset($_SESSION['id_user'])){
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

$id_user = $_SESSION['id_user'];

$keyword = "";

if(isset($_GET['cari'])){
    $keyword = mysqli_real_escape_string(
        $conn,
        $_GET['cari']
    );

    $query = mysqli_query(
        $conn,
        "SELECT *
        FROM catatan
        WHERE id_user='$id_user'
        AND status='aktif'
        AND (
            judul LIKE '%$keyword%'
            OR isi_catatan LIKE '%$keyword%'
        )
        ORDER BY tanggal DESC"
    );

}else{

    $query = mysqli_query(
        $conn,
        "SELECT *
        FROM catatan
        WHERE id_user='$id_user'
        AND status='aktif'
        ORDER BY tanggal DESC"
    );

}

?>

<!DOCTYPE html>
<html><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<head>

<meta charset="UTF-8">
<title>Semua Catatan</title>

<link rel="stylesheet" href="assets/css/style.css">

<style>

.search-box{
    margin:20px 0;
}

.search-box input{
    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:12px;
}
.container{
    max-width:700px;
    margin:0 auto;
    padding:20px;
}
.note-card{
    background:white;
    padding:15px;
    margin-bottom:15px;
    border-radius:15px;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
    width:100%;
}
.note-title{
    font-size:18px;
    font-weight:bold;
    margin-bottom:8px;
}

.note-date{
    color:#777;
    font-size:12px;
}

.action{
    margin-top:10px;
}

.edit{
    background:#6c4df6;
    color:white;
    padding:8px 12px;
    border-radius:8px;
    text-decoration:none;
}

.delete{
    background:#dc3545;
    color:white;
    padding:8px 12px;
    border-radius:8px;
    text-decoration:none;
}

.bottom-nav{
    position:fixed;
    bottom:0;
    width:100%;
    left:0;
    background:white;
    display:flex;
    justify-content:space-around;
    padding:15px;
    box-shadow:0 -2px 10px rgba(0,0,0,.1);
}

.bottom-nav a{
    text-decoration:none;
    color:#333;
}

.add-btn{
    width:60px;
    height:60px;
    background:#6c4df6;
    color:white !important;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-top:-30px;
    font-size:24px;
}

body{
    padding-bottom:100px;
}

</style>

</head>

<body>

<div class="container">

<div class="page-header">
    <a href="dashboard.php" class="back-btn">
        <i class="bi bi-chevron-left"></i>
    </a>

    <h2>
        <i class="bi bi-journal-bookmark-fill"></i>
        Semua Catatan
    </h2>
</div>
<form method="GET">

<div class="search-box">

<input
type="text"
name="cari"
placeholder="Cari catatan..."
value="<?= $keyword ?>">

</div>

</form>

<?php

if(mysqli_num_rows($query) > 0){

while($row = mysqli_fetch_assoc($query)){

?>

<div class="note-card">

<div class="note-title">
<?= htmlspecialchars($row['judul']) ?>


<p>
<?= nl2br(
substr(
htmlspecialchars($row['isi_catatan']),
0,
120
)
) ?>
...
</p>

<span>
<i class="bi bi-calendar3"></i>
<?= $row['tanggal']; ?>
</span>

<span>
<i class="bi bi-emoji-smile"></i>
<?= $row['mood']; ?>
</span>

<a
href="edit_catatan.php?id=<?= $row['id_catatan'] ?>"
class="edit">
Edit
</a>

<a
href="hapus_catatan.php?id=<?= $row['id_catatan'] ?>"
class="delete"
onclick="return confirm('Hapus catatan ini?')">
Hapus
</a>

</div>

</div>

<?php

}

}else{

echo "<p>Tidak ada catatan.</p>";

}

?>

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