<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(!isset($_SESSION['id_user'])){
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

$id_user = $_SESSION['id_user'];

$username = mysqli_real_escape_string(
    $conn,
    $_POST['username']
);

$email = mysqli_real_escape_string(
    $conn,
    $_POST['email']
);

$updateFoto = "";

if(isset($_FILES['foto_profil']) &&
   $_FILES['foto_profil']['error'] == 0){

    $folder = "assets/uploads/";

    if(!is_dir($folder)){
        mkdir($folder, 0777, true);
    }

    $namaFile = time() . "_" .
                basename($_FILES['foto_profil']['name']);

    $tujuan = $folder . $namaFile;

    if(move_uploaded_file(
        $_FILES['foto_profil']['tmp_name'],
        $tujuan
    )){

        $updateFoto =
        ", foto_profil='$namaFile'";

    }

}

$query = mysqli_query(
    $conn,
    "UPDATE users
    SET
    username='$username',
    email='$email'
    $updateFoto
    WHERE id_user='$id_user'"
);

if($query){

    $_SESSION['username'] = $username;

    header("Location: profil.php");
    exit;

}else{

    echo "Gagal update profil<br>";
    echo mysqli_error($conn);

}