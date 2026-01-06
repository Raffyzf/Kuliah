<?php
include 'koneksi.php';
include 'navbar.php';

$query = "SELECT pendaftaran.id, pendaftaran.tanggal_daftar, mahasiswa.nama_mahasiswa, kursus.nama_kursus, kursus.durasi FROM pendaftaran INNER JOIN mahasiswa ON pendaftaran.id_mahasiswa = mahasiswa.id INNER JOIN kursus ON pendaftaran.id_kursus = kursus.id";

$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Pendaftaran</title>
</head>
<body>
    <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Pendaftaran</h3>
        <a href="create-pendaftaran.php" class="btn btn-primary">Tambah Pendaftaran</a>
    </div>
    <button onclick="window.print()" class="btn btn-danger mb-3">Export PDF</button>
    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nama Kursus</th>
                <th>Durasi</th>
                <th>Tanggal Daftar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama_mahasiswa'] ?></td>
                <td><?= $row['nama_kursus'] ?></td>
                <td><?= $row['durasi'] ?> Jam</td>
                <td><?= $row['tanggal_daftar'] ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

