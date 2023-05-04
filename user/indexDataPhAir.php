<?php
include '../koneksi.php';
ini_set('date.timezone', 'Asia/Jakarta');
$sekarang = date('H:i:s');
$sekarangTgl = date('Y-m-d');

    $pesanE = false;
    $waktu = $sekarang;
    $tanggal = $sekarangTgl; 
    $aerasi1 = $_POST['aerasi1']; 
    $aerasi2 = $_POST['aerasi2']; 
    $aerasi3 = $_POST['aerasi3']; 
    $effluent = $_POST['effluent']; 
    $recycle = $_POST['recycle']; 
    $inlet = $_POST['inlet']; 
   
     
    if(empty($aerasi1)  or empty($aerasi2) or empty($aerasi3) or empty($effluent) or empty($recycle) or empty($inlet)){
        echo '<p id="pesanErr1">Isi  Kotak</p>';
        $pesanE = true;
    }else{
        $pesanE = false;
        echo '<p id="pesanErr1">Thank</p>';
        // mysqli_query($conn, "INSERT INTO ph_air VALUES('', '$waktu', '$tanggal', '$aerasi1', '$aerasi2', '$aerasi3', '$effluent', '$recycle', '$inlet')");
    }      
 


?>
<script>

    pesanE = "<?= $pesanE;?>"

  
  if(pesanE == true){
      
    
    //   let sa = document.querySelector('#pesanErr1').innerText = 'satu'
    //   $('#pesanErr1').val('pesan')
  }
  if(pesanE == false){
      console.log('a false')
      $('#aerasi1, #aerasi2, #aerasi3, #effluent, #recycle, #inlet').val('')
      
      $('.job').hide() 
      $('.container').show()
     

  }

  

</script>