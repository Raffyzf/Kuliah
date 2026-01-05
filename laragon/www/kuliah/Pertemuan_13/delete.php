<?php
include 'koneksi.php';
$id = $_GET['id'];

$delete = mysqli_query($koneksi, "DELETE FROM pendaftaran WHERE id = '$id'");

if($delete){
    header("Location: index.php");
}else{
    echo "Gagal Menghapus data";
}