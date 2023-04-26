<?php
include 'coba1Koneksi.php';

    

$pekerjaan = $_POST['pekerjaan'];
$waktu = $_POST['waktu'];
$response['pesan']= '';




if ($pekerjaan == ""){
    $response['pesan'] = 'Pekerjaan tak boleh kosong';
    // echo 'pekerjaan tdk boleh kosong';
  
}else if ($waktu == ""){
    $response['pesan'] = 'Waktu tidak boleh kosong';
    // echo 'waktu tdk boleh kosong';
  
}else{
  $sql = "INSERT INTO task VALUES ('', '$pekerjaan', '$waktu')";
  if(mysqli_query($conn,$sql)){
    $response['pesan']= 'berhasil';
  }else {
    $response['pesan']= 'gagal';
  }
    
}
echo json_encode($response);
// $pekerjaan = $_POST['pekerjaan'];
// $waktu = $_POST['waktu'];
// $response['pesan'] = '';
// if($pekerjaan == '' ){
//     echo $response['pesan'] = 'pekerjaan tidak boleh kosong';
// }else if ($waktu == ''){
//     echo $response['pesan'] = 'waktu tidak boleh kosong';
// }else {
//    echo $pekerjaan;
    // echo json_encode($response);
// }

// $pekerjaan = $_POST['pekerjaan'];
// $waktu = $_POST['waktu'];
// $response['pesan'] = '';

// if ($pekerjaan == ''){
//     $response['pesan'] =  ' Pekerjaan tak boleh kosong';
    
// }else if($waktu == ''){

//     $response['pesan'] =  ' Waktu tak boleh kosong'; 
    
// }else{

//   $response;
// }
// echo json_encode($response);

?>
