<?php
include 'coba1Koneksi.php';
$queryResult = $conn->query("SELECT * FROM task ");
$result = array();
while($fetchData = $queryResult->fetch_assoc()){
    $result[] = $fetchData;
}
echo json_encode($result);
