<?php
include '../koneksi.php';
ini_set('date.timezone', 'Asia/Jakarta');
$sekarang = date('H:i:s');
$sekarangTgl = date('Y-m-d');
// if (isset($_POST['submit'])){
    $pesanE = false;
    $waktu = $sekarang;
    $tanggal = $sekarangTgl; 
    $jumlah = $_POST['jumlah']; 
    $sumber = $_POST['sumber']; 
    $operator = $_POST['operator']; 
    if(empty($jumlah)  or empty($operator)){
        echo '<p id="pesanErr">Isi Semua Kotak</p>';
        $pesanE = true;
    }else{
        $pesanE = false;
        echo '<p id="pesanErr">Thank You</p>';
        // mysqli_query($conn, "INSERT INTO sampah VALUES('', '$waktu', '$tanggal', '$jumlah', '$sumber', '$operator')");
      
    }      
   
// }

?>

<!-- <?php
// Get the form data
$name = $_POST['jumlah'];
$email = $_POST['operator'];

// Validate the form data
$errors = [];

if (empty($name)) {
  $errors[] = 'Name is required';
}

if (empty($email)) {
  $errors[] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'Invalid email format';
}

// Return the response
if (count($errors) === 0) {
  echo 'Form submitted successfully';
} else {
  echo implode('<br>', $errors);
}
?> -->


<script>
   pesanE = "<?= $pesanE;?>"
  
    if(pesanE == true){
        
        console.log('pesanE true')
       
        // $('#pesanErr').val('pesan')
    }
    if(pesanE == false){
        console.log('a false')
        $('#jumlah, #operator, #sumber').val('')
    }
   
     
   
</script>