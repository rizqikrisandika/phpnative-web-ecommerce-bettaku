<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "db_bettaku";

$db = mysqli_connect($server, $user, $password, $dbname);

if (!$db){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>