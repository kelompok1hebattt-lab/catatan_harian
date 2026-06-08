<?php

session_start();
include 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query(
$conn,
"SELECT * FROM users
WHERE username='$username'"
);

$data = mysqli_fetch_assoc($query);

if($data){

    if(password_verify($password,$data['password'])){

        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];

        header("Location: dashboard.php");

    }else{

        echo "Password salah";

    }

}else{

    echo "User tidak ditemukan";

}