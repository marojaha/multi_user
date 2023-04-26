<?php
$sekarang = date('H:i:s');
$sekarangTgl = date('Y-m-d');

    $pesanError1 = false;
    $waktu = $sekarang;
    $tanggal = $sekarangTgl; 
    $jenisLimbah = $_POST['jenisLimbah']; 
    $kode = $_POST['kode']; 
    $volume = $_POST['volume']; 
    $sumber = $_POST['sumber']; 
     
    if(empty($jenisLimbah)  or empty($kode) or empty($volume) or empty($sumber)){
        echo '<p id="pesanErr1">Isi  Kotak</p>';
        $pesanError1 = true;
    }else{
        $pesanError1 = false;
        echo '<p id="pesanErr1">Thank</p>';
        // mysqli_query($conn, "INSERT INTO sampah VALUES('', '$waktu', '$tanggal', '$jumlah', '$sumber', '$operator')");
    }      
 


?>
<script>
  

  console.log('index Data B3')

</script>