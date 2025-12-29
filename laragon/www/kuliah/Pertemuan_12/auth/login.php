<?php
session_start();
include "../koneksi.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM raffy_users WHERE username = '$username'");
    $data = mysqli_fetch_assoc($query);


    if($data && password_verify($password, $data['password'])){
        $_SESSION['login'] = true;
        $_SESSION['nama_user'] = $data['nama_user'];

        echo "<script>
                alert('Login Berhasil');
                window.location.href = '../dashboard.php';
            </script>";
        exit;
    }else{
        echo "<script>
                alert('Username atau password salah');
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login | Sign In</title>
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Sign In</h3>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                </div>
                <button name="login" type="submit" class="btn btn-primary w-100">
                    Sign In
                </button>
                <p class="text-center mt-3 mb-0">
                    Belum punya akun?
                    <a href="register.php" class="text-decoration-none">Sign Up</a>
                </p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
