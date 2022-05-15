<?php
$conn = mysqli_connect("localhost","root"," ","chat");
if(!$conn){
    echo "Database not Connected" .mysqli_connect_error();
}


?>