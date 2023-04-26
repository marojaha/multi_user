<?php
$sekarang = date('H:i:s');
$sekarangTgl = date('Y-m-d');

    $pesanError1 = false;
    $waktu = $sekarang;
    $tanggal = $sekarangTgl; 
    $botolPlastik = $_POST['botolPlastik']; 
    $kardus = $_POST['kardus']; 
    $kAlminium = $_POST['kAlminium']; 
    $kBiasa = $_POST['kBiasa']; 
    $organik = $_POST['organik']; 
   
    if(empty($botolPlastik)  or empty($kardus) or empty($kAlminium) or empty($kBiasa) or empty($organik)){
        echo '<p id="pesanErr">Isi  Kotak</p>';
        $pesanError1 = true;
    }else{
        $pesanError1 = false;
        echo '<p id="pesanErr">Thank</p>';
        // mysqli_query($conn, "INSERT INTO sampah VALUES('', '$waktu', '$tanggal', '$jumlah', '$sumber', '$operator')");
    }      
 


?>
<script>
  

  console.log('index Data Pilah')

</script>