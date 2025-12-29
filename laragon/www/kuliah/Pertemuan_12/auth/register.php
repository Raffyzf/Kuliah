<?php
include "../koneksi.php";

if(isset($_POST['register'])){
    $nama = $_POST['nama_user'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($koneksi, "INSERT INTO raffy_users(nama_user, username, password) VALUES('$nama', '$username', '$password')");
    echo "<script>
                alert('Register Berhasil');
                window.location.href = 'login.php';
            </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register | Sign Up</title>
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 450px;">
            <h3 class="text-center mb-4">Sign Up</h3>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama_user" class="form-control" placeholder="Masukkan nama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                </div>
                <button name="register" type="submit" class="btn btn-primary w-100">
                    Sign Up
                </button>
                <p class="text-center mt-3 mb-0">
                    Sudah punya akun?
                    <a href="login.php" class="text-decoration-none">Sign In</a>
                </p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
