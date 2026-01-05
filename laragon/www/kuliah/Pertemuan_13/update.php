<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <form action="" method="POST" class="card p-4">
        <h3 class="mb-4">Form Update Pendaftaran</h3>
        <div class="mb-3">
            <label class="form-label">Pilih Nama Mahasiswa</label>
            <select name="id_mahasiswa" class="form-select">
                <option value="">---Pilih Nama---</option>
                <?php
                $data_mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

                while ($mahasiswa = mysqli_fetch_assoc($data_mahasiswa)){
                    $selected = ($mahasiswa['id'] == $row['id_mahasiswa']) ? 'selected' : '';
                    echo"<option value='{$mahasiswa['id']}' $selected>{$mahasiswa['nama_mahasiswa']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Pilih Nama Kursus</label>
            <select name="id_kursus" class="form-select">
                <option value="">---Pilih Nama Kursus---</option>
                <?php
                $data_kursus = mysqli_query($koneksi, "SELECT * FROM kursus");

                while ($kursus = mysqli_fetch_assoc($data_kursus)){
                    $selected = ($kursus['id'] == $row['id_kursus']) ? 'selected' : '';
                    echo"<option value='{$kursus['id']}' $selected>{$kursus['nama_kursus']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Daftar</label>
            <input type="date" name="tanggal_daftar" class="form-control" value="<?= $row['tanggal_daftar'] ?>" required>
        </div>
        <div class="d-flex gap-2">
            <button type="submit" name="daftar" class="btn btn-primary">
                Update
            </button>
            <a href="index.php" class="btn btn-secondary">
                Batal
            </a>
        </div>
        <?php
        if(isset($_POST['daftar'])){
            $id_mhs = $_POST['id_mahasiswa'];
            $id_krss = $_POST['id_kursus'];
            $id_tanggal = $_POST['tanggal_daftar'];

            $update = mysqli_query($koneksi, "UPDATE pendaftaran SET id_mahasiswa='$id_mhs', id_kursus='$id_krss', tanggal_daftar='$id_tanggal' WHERE id='$id'");

            if($update){
                header("Location: index.php");
            }else{
                echo"<strong>Gagal Update Pendaftaran</strong>";
            }
        }
        ?>
    </form>
</body>
</html>