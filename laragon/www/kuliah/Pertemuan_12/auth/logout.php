<?php
session_start();
session_destroy();
header("Location: /kuliah/Pertemuan_12/auth/login.php");
?>