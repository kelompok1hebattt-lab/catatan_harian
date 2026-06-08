<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include 'config/koneksi.php';

if(!isset($_SESSION['id_user'])){
    header("Location: login.php");
    exit;
}

$id_catatan = $_POST['id_catatan'];
$judul = $_POST['judul'];
$isi = $_POST['isi_catatan'];
$mood = $_POST['mood'];

$query = mysqli_query(
    $conn,
    "UPDATE catatan
    SET
    judul='$judul',
    isi_catatan='$isi',
    mood='$mood'
    WHERE id_catatan='$id_catatan'"
);

if($query){

    header("Location: dashboard.php");
    exit;

}else{

    echo mysqli_error($conn);

}