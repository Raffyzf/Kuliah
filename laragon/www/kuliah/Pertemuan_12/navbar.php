<?php
$base_url = "/kuliah/Pertemuan_12";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="<?= $base_url; ?>/dashboard.php">
            Tugas Pertemuan 12
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url; ?>/dashboard.php">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url; ?>/user/users.php">
                        Data User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?= $base_url; ?>/auth/logout.php"onclick="return confirm('Yakin ingin logout?')">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
