<?php 
$sNAME = "localhost";
$uNAME = "root";
$pass = "";
$db_name = "chat_db";

try{
    $conn = new PDO("mysql:host=$sNAME;dbname =$db_name,$uNAME,$pass");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "connection failed :". $e->getMessage();
}

?> 
