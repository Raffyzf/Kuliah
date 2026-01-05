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
    <title>Tambah Pendaftaran</title>
</head>
<body>
<div class="container mt-4">
    <form action="" method="POST" class="card p-4">
        <h3 class="mb-4">Form Pendaftaran</h3>
        <div class="mb-3">
            <label class="form-label">Pilih Nama Mahasiswa</label>
            <select name="id_mahasiswa" class="form-select">
                <option value="">---Pilih Nama---</option>
                <?php
                $data_mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                while ($mahasiswa = mysqli_fetch_array($data_mahasiswa)){
                    echo"<option value ='". $mahasiswa['id'] . "'>" . $mahasiswa['nama_mahasiswa'] . "</option>";
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
                while ($kursus = mysqli_fetch_array($data_kursus)){
                    echo "<option value ='". $kursus['id']. "'>" . $kursus['nama_kursus'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal daftar</label>
            <input type="date" name="tanggal_daftar" class="form-control" value="<?=  date('Y-m-d') ?>" required>
        </div>
        <button type="submit" name="daftar" class="btn btn-primary">
            Daftarkan
        </button>

        <?php
        if(isset($_POST['daftar'])){
            $id_mhs = $_POST['id_mahasiswa'];
            $id_krss = $_POST['id_kursus'];
            $id_tanggal = $_POST['tanggal_daftar'];

            $simpan = mysqli_query($koneksi, "INSERT INTO pendaftaran (id_mahasiswa, id_kursus, tanggal_daftar)VALUES('$id_mhs' , '$id_krss', '$id_tanggal')");

            if($simpan){
                echo"<strong>Berhasil Membuat Pendaftaran</strong>";
            }else{
                echo"<strong>Gagal Membuat Pendaftaran</strong>";
            }
        }
        ?>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>