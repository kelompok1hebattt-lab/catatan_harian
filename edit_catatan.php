<?php

session_start();

if(!isset($_SESSION['id_user'])){
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

$id_catatan = $_GET['id'];
$id_user = $_SESSION['id_user'];

$query = mysqli_query(
    $conn,
    "SELECT *
    FROM catatan
    WHERE id_catatan='$id_catatan'
    AND id_user='$id_user'"
);

$data = mysqli_fetch_assoc($query);

if(!$data){
    die("Catatan tidak ditemukan");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Catatan</title>

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

label{
    display:block;
    margin-top:15px;
    margin-bottom:8px;
    font-weight:600;
}

input,
textarea,
select{
    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:12px;
}

textarea{
    height:180px;
    resize:none;
}

.btn{
    width:100%;
    margin-top:20px;
    padding:15px;
    background:#6c4df6;
    color:white;
    border:none;
    border-radius:15px;
    cursor:pointer;
}

.back{
    text-decoration:none;
    color:#333;
    font-size:20px;
}

</style>
</head>

<body>

<div class="container">

<a href="semua_catatan.php" class="back">
← Kembali
</a>

<br><br>

<div class="card">

<h2>Edit Catatan</h2>

<form action="update_catatan.php" method="POST">

<input
type="hidden"
name="id_catatan"
value="<?= $data['id_catatan']; ?>">

<label>Judul</label>

<input
type="text"
name="judul"
value="<?= htmlspecialchars($data['judul']); ?>"
required>

<label>Mood</label>

<select name="mood">

<option value=" Senang"
<?= $data['mood']==" Senang" ? "selected" : ""; ?>>
 Senang
</option>

<option value=" Biasa"
<?= $data['mood']==" Biasa" ? "selected" : ""; ?>>
 Biasa
</option>

<option value=" Sedih"
<?= $data['mood']==" Sedih" ? "selected" : ""; ?>>
 Sedih
</option>

<option value=" Marah"
<?= $data['mood']==" Marah" ? "selected" : ""; ?>>
 Marah
</option>

</select>

<label>Isi Catatan</label>

<textarea
name="isi_catatan"
required><?= htmlspecialchars($data['isi_catatan']); ?></textarea>

<button
type="submit"
class="btn">

💾 Simpan Perubahan

</button>

</form>

</div>

</div>

</body>
</html>