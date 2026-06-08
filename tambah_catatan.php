<?php

session_start();

if(!isset($_SESSION['id_user'])){
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

if(isset($_POST['simpan'])){

    $judul = mysqli_real_escape_string(
    $conn,
    $_POST['judul']
);

$isi = mysqli_real_escape_string(
    $conn,
    $_POST['isi']
);

$mood = mysqli_real_escape_string(
    $conn,
    $_POST['mood']
);

    mysqli_query(
        $conn,
        "INSERT INTO catatan
        (id_user,judul,isi_catatan,mood,tanggal,status)
        VALUES
        (
            '".$_SESSION['id_user']."',
            '$judul',
            '$isi',
            '$mood',
            CURDATE(),
            'aktif'
        )"
    );

    header("Location: dashboard.php");
}

?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<meta charset="UTF-8">
<title>Tambah Catatan</title>

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

.header{
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom:25px;
}

.back{
    text-decoration:none;
    font-size:22px;
    color:#333;
}

.card{
    background:white;
    padding:25px;
    border-radius:25px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
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
    padding:14px;
    border:1px solid #ddd;
    border-radius:12px;
    font-size:15px;
}

textarea{
    resize:none;
    height:180px;
}

.counter{
    text-align:right;
    margin-top:5px;
    color:#777;
    font-size:13px;
}

.btn{
    width:100%;
    margin-top:25px;
    padding:15px;
    border:none;
    border-radius:15px;
    background:#6c4df6;
    color:white;
    font-size:16px;
    cursor:pointer;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-3px);
}

.icon{
    text-align:center;
    font-size:60px;
    margin-top:20px;
}

</style>

</head>

<body>

<div class="container">

<div class="header">

<a href="dashboard.php" class="back">
<i class="bi bi-chevron-left"></i>
</a>

<h2>Tambah Catatan</h2>

<div></div>

</div>

<div class="card">

<form method="POST">

<label>Judul</label>

<input
type="text"
name="judul"
placeholder="Masukkan judul catatan"
required>

<label>Tanggal</label>

<input
type="date"
value="<?= date('Y-m-d'); ?>"
readonly>

<label>Mood</label>

<select name="mood">

<option value=" Senang"> Senang</option>
<option value=" Biasa"> Biasa</option>
<option value=" Sedih"> Sedih</option>
<option value=" Marah"> Marah</option>
<option value=" Semangat"> Semangat</option>

</select>

<label>Isi Catatan</label>

<textarea
name="isi"
id="isi"
maxlength="1000"
placeholder="Tuliskan catatan Anda di sini..."
required></textarea>

<div class="counter">
<span id="jumlah">0</span>/1000
</div>

<div class="icon">
<i class="bi bi-journal-text"></i>
</div>

<button
type="submit"
name="simpan"
class="btn">

Simpan Catatan

</button>

</form>

</div>

</div>

<script>

const textarea = document.getElementById('isi');
const jumlah = document.getElementById('jumlah');

textarea.addEventListener('input', function(){

    jumlah.innerText = this.value.length;

});

</script>

</body>
</html>