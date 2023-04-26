<?php
$sekarang = date('H:i:s');
$sekarangTgl = date('Y-m-d');
if (isset($_POST['bakar'])){
    $pesanError1 = false;
    $waktu = $sekarang;
    $tanggal = $sekarangTgl; 
    $mesin1 = $_POST['mesin1']; 
    $mesin2 = $_POST['mesin2']; 
   
    if(empty($mesin1)  or empty($mesin2)){
        echo '<p id="pesanErr">Isi  Kotak</p>';
        $pesanError = true;
    }else{
        $pesanError = false;
        echo '<p id="pesanErr">Thank</p>';
        // mysqli_query($conn, "INSERT INTO sampah VALUES('', '$waktu', '$tanggal', '$jumlah', '$sumber', '$operator')");
    }      
 
}

?>
<script>
  

  console.log('index Data Bakar')

</script>