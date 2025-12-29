<?php
include "../koneksi.php";
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM raffy_users WHERE id_user = '$id'");
echo"<script>
            alert('Delete User Berhasil');
            window.location.href = 'users.php';
    </script>";
?>
