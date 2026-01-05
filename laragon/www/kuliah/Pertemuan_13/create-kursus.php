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
    <title>Tambah Kursus</title>
</head>
<body>

<div class="container mt-4">
    <form action="" method="POST" class="card p-4">
        <h3 class="mb-4">Tambah Kursus</h3>
        <div class="mb-3">
            <input type="text" name="nama_kursus" class="form-control" placeholder="Masukan Nama Kursus" required>
        </div>
        <div class="mb-3">
            <input type="text" name="durasi" class="form-control" placeholder="Masukan Durasi" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success">
            Simpan
        </button>

    <?php
    if(isset($_POST['submit'])){
        $krss = $_POST['nama_kursus'];
        $drs = $_POST['durasi'];
        mysqli_query($koneksi, "INSERT INTO kursus (nama_kursus, durasi) VALUES ('$krss', '$drs')");
        echo "Kursus berhasil disimpan";
    }
    ?>
    </form>
</div>
</body>
</html>