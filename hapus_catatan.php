<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(!isset($_SESSION['id_user'])){
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

if(isset($_GET['id'])){

    $id_catatan = $_GET['id'];
    $id_user = $_SESSION['id_user'];

    $query = mysqli_query(
        $conn,
        "UPDATE catatan
        SET status='hapus'
        WHERE id_catatan='$id_catatan'
        AND id_user='$id_user'"
    );

    if($query){

        header("Location: semua_catatan.php");
        exit;

    }else{

        echo "Gagal menghapus catatan: " . mysqli_error($conn);

    }

}else{

    echo "ID catatan tidak ditemukan";

}