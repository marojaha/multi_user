<?php

session_start();

if ($_SESSION['level'] !== 'admin'){
    header('location:../login.php');
    exit;
}
include '../template/header.php';
?>
<!-- <?php  ?> -->
<p><?= $_SESSION['nama']; ?></p>
<a href="../logout.php">Logout</a>

 <?php include '../template/footer.php'; ?>
