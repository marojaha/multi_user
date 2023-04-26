<?php
$sekarang = date('H:i:s');
$sekarangTgl = date('Y-m-d');

    $pesanE = false;
    $waktu = $sekarang;
    $tanggal = $sekarangTgl; 
    $aerasi1 = $_POST['aerasi1']; 
    $aerasi2 = $_POST['aerasi2']; 
    $aerasi3 = $_POST['aerasi3']; 
    $effluent = $_POST['effluent']; 
    $inlet = $_POST['inlet']; 
    $inlet = $_POST['inlet']; 
    $pam = $_POST['pam']; 
     
    if(empty($aerasi1)  or empty($aerasi2) or empty($aerasi3) or empty($effluent) or empty($recycle) or empty($inlet) or empty($pam)){
        echo '<p id="pesanErr1">Isi  Kotak</p>';
        $pesanE = true;
    }else{
        $pesanE = false;
        echo '<p id="pesanErr1">Thank</p>';
        // mysqli_query($conn, "INSERT INTO sampah VALUES('', '$waktu', '$tanggal', '$jumlah', '$sumber', '$operator')");
    }      
 


?>
<script>
    pesanE = "<?= $pesanE;?>"
  
  if(pesanE == true){
      
      console.log('pesanE true')
    //   let sa = document.querySelector('#pesanErr1').innerText = 'satu'
    //   $('#pesanErr1').val('pesan')
  }
  if(pesanE == false){
      console.log('a false')
      $('#aerasi1, #aerasi2, #aerasi3, #effluent, #recycle, #inlet, #pam').val('')
  }

  

</script>