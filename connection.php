<?php 
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit'])){
    $conn= mysqli_connect('localhost','root','','chat-db') or die("connection failed:" .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])){
        $name= $_POST['name'];
        $username= $_POST['username'];
        $password= $_POST['password'];
$sql= "INSERT INTO `users` (`name`, 'username', 'password') VALUES(`$name`, '$username', `$password`)";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "entry succesfull";
    }
    else 'connection error';
}

}



?>