<?php
$sekarang = date('H:i:s');
$sekarangTgl = date('Y-m-d');

    $pesanError1 = false;
    $waktu = $sekarang;
    $tanggal = $sekarangTgl; 
    $nopol = $_POST['nopol']; 
    $volume = $_POST['volume']; 
    $operator = $_POST['operator']; 
     
    if(empty($nopol)  or empty($volume) or empty($operator)){
        echo '<p id="pesanErr1">Isi  Kotak</p>';
        $pesanError1 = true;
    }else{
        $pesanError1 = false;
        echo '<p id="pesanErr1">Thank</p>';
        // mysqli_query($conn, "INSERT INTO sampah VALUES('', '$waktu', '$tanggal', '$jumlah', '$sumber', '$operator')");
    }      
 


?>
<script>
  

  console.log('index Data Angkut')

</script>