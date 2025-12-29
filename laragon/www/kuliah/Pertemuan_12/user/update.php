<?php
include "../koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM raffy_users WHERE id_user = '$id'");
$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){
    $nama = $_POST['nama_user'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($koneksi, "UPDATE raffy_users SET nama_user ='$nama', username = '$username', password = '$password' WHERE id_user = '$id'");
    echo "<script>
                alert('Update User Berhasil');
                window.location.href = 'users.php';
            </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Users</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="text-center mb-4">Update User</h4>
                        <form method="post">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama_user" class="form-control"value="<?= $data['nama_user']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control"value="<?= $data['username']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="password" name="password" class="form-control"value="<?= $data['password']; ?>" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="users.php" class="btn btn-secondary">
                                    Kembali
                                </a>
                                <button name="update" type="submit" class="btn btn-warning">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
