<?php

//Koneksi ke database
$userDB = "root";
$passDB = "123";
$nameDB = "db_portal";

$conn = mysqli_connect('localhost', $userDB, $passDB, $nameDB);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>