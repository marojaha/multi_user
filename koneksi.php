<?php
session_start();
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "limbah";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn){
    die('koneksi gagagl!');
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query); 
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    $errorName= '';
function coba(){
    $salah1 = '';
    $salah2 = '';
    global $conn, $errorName;
    if(isset($_POST['login'])){
        $user_name=$_POST['user_name'];
        $password=$_POST['password'];
        $_SESSION['nama'] = $user_name;
        // if(empty($user_name)){
        //     $errorName = 'Nama tidak Boleh Kosong';
        // }else
    $cek_user = mysqli_query($conn, "SELECT * FROM multi_login WHERE user_name = '$user_name' AND password = '$password'");
    $hitung = mysqli_num_rows($cek_user);
        if ($hitung > 0){
            // kalau data ditemukan
            $ambilDatalevel = mysqli_fetch_assoc($cek_user);
            $level = $ambilDatalevel['level'];
            echo($level);
          die;
            if($level == 'admin'){
                // $_SESSION['log'] = 'Logged';
                $_SESSION['level'] = 'admin';
                header('location:admin');
            }else {
                // $_SESSION['log'] = 'Logged';
                $_SESSION['level'] = 'user';
                header('location:user');

            }
        }else {
            // kalau data tidak ditemukan
            $errorName = "Data tidak ditemukan!";
        }
    }
}
function login(){
    global $conn;
    if(isset($_POST['login'])){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $_SESSION['nama'] = $user_name;
        // ceck user name
        $cek_user = mysqli_query($conn, "SELECT * FROM multi_login WHERE user_name = '$user_name'");
       
        // cek user
        $hitung = mysqli_num_rows($cek_user);
        if($hitung == 1){
            $row = mysqli_fetch_assoc($cek_user);
         
            if(password_verify($password, $row['password'])){
                echo 'password benar';
               
              $level = $row['level'];
                
                if($level == 'admin'){
                    $_SESSION['level'] = 'admin';
                    header('location:admin');
                    
                }else{
                    $_SESSION['level'] = 'user';
                    header('location:user');
                    
                }
            }else {
                echo '<p id="pesan">password salah</p>' ;
            }
        }else echo '<p id="pesan">nama tidak ada</p>';
    }
}
function registrasi($data) {
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $level = strtolower(stripslashes($data["level"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek user name

$result = mysqli_query($conn, "SELECT user_name FROM multi_login WHERE user_name = '$username'");

if(mysqli_fetch_assoc($result)) {
    // echo "<script> alert('username sudah terdaftar') </script>";
  
    return false;
}

// cek konfirmasi

if($password !== $password2) {
    echo "<script> alert('konfirmasi password tidak sesuai!') </script>" ;
    return false;
}

// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);
// INSERT KE DATABASE
mysqli_query($conn, "INSERT  INTO multi_login VALUES ('', '$username', '$password', '$level')"); 
return mysqli_affected_rows($conn);

}
function test_input($data){
    $data= trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strtolower($data);
    return $data;
}