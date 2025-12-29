<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: auth/login.php");
    exit;
}
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="mb-3">Dashboard User</h3>
                <p class="fs-5">
                    Halo, <strong><?= $_SESSION['nama_user']; ?></strong>
                </p>
                <p class="text-muted">
                    Selamat datang di halaman dashboard.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
