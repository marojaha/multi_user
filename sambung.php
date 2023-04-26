<?php

class Db_connect{
    // public $localhost;
    // public $root ;
    // public $password ;
    // public $db_name ;
    
    
    function __construct($localhost,$root,$password,$db_name)
    {
        $conn = new mysqli($localhost, $root, $password, $db_name);
        if($conn->connect_errno){
            die("connection failed: . $conn->connect_error");
        }
    }
 
   

}
$connec = new Db_connect('localhost', 'root', '', 'limbah3');
define("makan", "Apakah Kamu telah Makan?");
echo constant("makan");