<?php

include 'config/koneksi.php';

$username = $_POST['username'];
$email = $_POST['email'];

$password = password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);

mysqli_query(
$conn,
"INSERT INTO users(
username,
email,
password
)
VALUES(
'$username',
'$email',
'$password'
)"
);

header("Location: login.php");