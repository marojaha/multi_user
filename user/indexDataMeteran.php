<?php
$sekarang = date('H:i:s');
$sekarangTgl = date('Y-m-d');

    $pesanError1 = false;
    $waktu = $sekarang;
    $tanggal = $sekarangTgl; 
    $ipal = $_POST['ipal']; 
    $recycle = $_POST['recycle']; 
     
    if(empty($ipal)  or empty($recycle)){
        echo '<p id="pesanErr1">Isi  Kotak</p>';
        $pesanError1 = true;
    }else{
        $pesanError1 = false;
        echo '<p id="pesanErr1">Thank</p>';
        // mysqli_query($conn, "INSERT INTO sampah VALUES('', '$waktu', '$tanggal', '$jumlah', '$sumber', '$operator')");
    }      
 


?>
<script>
  

  console.log('index Data Meteran')

</script>