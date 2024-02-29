<?php 
session_start(); // Add session_start() at the beginning of the script to use session variables

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "multiuser";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

$Username = "";
$Password = "";
$err = "";
?>