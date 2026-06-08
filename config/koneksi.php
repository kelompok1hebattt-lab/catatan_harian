<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "catatan_harian";

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die("Koneksi Database Gagal");
}