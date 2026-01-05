<?php
include 'koneksi.php';
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Mahasiswa</title>
</head>
<body>
<div class="container mt-4">
    <form action="" method="POST" class="card p-4">
        <h3 class="mb-4">Tambah Mahasiswa</h3>
        <div class="mb-3">
            <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukkan Nama" required>
        </div>
        <div class="mb-3">
            <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success">
            Simpan
        </button>

    <?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama_mahasiswa'];
        $nim_mhs = $_POST['nim'];
        mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mahasiswa, nim) VALUES ('$nama', '$nim_mhs')");
        echo "Mahasiswa berhasil disimpan!";
    }
    ?>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>