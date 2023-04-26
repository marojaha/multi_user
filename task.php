<?php
include 'koneksi.php';
ini_set('date.timezone', 'Asia/Jakarta');
if(isset($_POST['simpan'])){
    $pekerjaan = $_POST['pekerjaan'];
    $waktu = $_POST['waktu'];
   
    mysqli_query($conn, "INSERT INTO task VALUE('', '$pekerjaan', '$waktu')");
}
$task_group = query("SELECT * FROM task");

if(isset($_POST['tugas'])){
    $pekerjaan = $_POST['pekerjaan'];
    $tanggal = $_POST['tgl'];
    $waktu = $_POST['waktu'];
    echo $tanggal;
    echo $waktu;
    mysqli_query($conn, "INSERT INTO task_done VALUE('', '$pekerjaan', '$waktu', '$tanggal')");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container-task">
    <form action="" method="post">
        <label for="pekerjaan">Pekerjaan</label>
        <input type="text" name="pekerjaan" id="pekerjaan">
        <label for="waktu">Waktu</label>
        <input type="text" name="waktu" id="waktu">
        <button type="submit" name="simpan">Simpan</button>
    </form>
</div>
<form action="" method="post">
<input type="hidden" name="tgl" value="<?= date('Y-m-d') ?>;">
            <input type="hidden" name="waktu" value="<?= date('H:i:s')?>;">
    <select name="pekerjaan" id="">
        <?php foreach($task_group as $tg): ?>
            <option value="<?= $tg['pekerjaan']; ?>" ><?= $tg['pekerjaan']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="tugas">Tugas</button>
    </form>
</body>
</html>
