<?php
include "../koneksi.php";
include "../navbar.php";

$data = mysqli_query($koneksi, "SELECT * FROM raffy_users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Users</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Data Users</h4>
            <a href="create.php" class="btn btn-primary">
                Tambah User
            </a>
        </div>
        <div class="card shadow">
            <div class="card-body p-0">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th width="180">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($raffy_data = mysqli_fetch_assoc($data)){ ?>
                        <tr>
                            <td><?= $raffy_data['nama_user']; ?></td>
                            <td><?= $raffy_data['username']; ?></td>
                            <td>
                                <a href="update.php?id=<?= $raffy_data['id_user']; ?>" class="btn btn-warning btn-sm">Edit
                                </a>
                                <a href="delete.php?id=<?= $raffy_data['id_user']; ?>" class="btn btn-danger btn-sm"onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
