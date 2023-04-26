<?php
// session_start();
include '../koneksi.php';
if ($_SESSION['level'] !== 'user'){
    header('location:../login.php');
    exit;
}
ini_set('date.timezone', 'Asia/Jakarta');
// $pesan = '';
if ($_SESSION['nama'] == 'joko') {
    $pesan = 'Joko';
}

if (isset($_POST['masuk'])){
    $ipal = $_POST['recycle'];
    $recycle = $_POST['ipal'];
    if(empty($ipal) or empty($recycle)){
        echo 'tak boleh kosong';
     
    }
  
}

// echo($sekarang);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/user.css">
    <title>Document</title>
</head>
<body>
    <div class="bungkus">
        <div class="container"></div>      
        <div class="job"></div>
    </div>
    
  
    
        <p id="pesanErr"></p>
         
        <div class="user">
            <div class="gambar">
                <p><?= $pesan; ?></p>   
                <a href="../logout.php">Logout</a>
            </div>
            <img class="gambarUser" src="../img/nyapu.jpeg" alt="">
        </div>
        <div class="blink"></div>
        <div class="blink1"></div>
        <div class="blink2"></div>
        <div class="blink3"></div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="../js/user.js"></script>

</body>
</html>