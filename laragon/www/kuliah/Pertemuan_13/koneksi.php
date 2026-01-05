<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "raffy_relasi";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Tidak bisa terkoneksi ke database" . mysqli_connect_error());
}