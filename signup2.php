<?php

if(isset($_POST['username'])&&
isset($_POST['username'])&&
isset($_POST['username'])){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = 'name='.$name.'username'.$username;

    if(empty($name)){
        $em = "Name is Required";
        header("Location: signup.php?error=$em");
        exit;
    }
    else if(empty($username)){
        $em = "Username is Required";
        header("Location: signup.php?error=$em&$data");
        exit;
    }
    else if(empty($password)){
        $em = "Password is Required";
        header("Location: signup.php?error=$em&$data");
        exit;
    }
    else{
        echo "good";
    }
}

?>