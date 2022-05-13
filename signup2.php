<?php

if(isset($_POST['username'])&&
isset($_POST['name'])&&
isset($_POST['password'])){

include "connection.php";

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
       $sql = "SELECT username FROM users WHERE username=?";
       $stmt = $conn->prepare($sql);
       $stmt->execute([$username]);

       if($stmt->rowCount() > 0){
           $em = "The username ($username) is taken";
           header("Location: signup.php?error=$em&$data");
           exit;

       }
       else{
           if(isset($_FILES['profilepic'])){
            $img_name = $_FILES['profilepic'];
            $tmp_name = $_FILES['profilepic']['tmp_name'];
            $error = $_FILES['profilepic']['error'];

            if($error === 0){
$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$allowed_exs = array("jpg","jpeg","png") ;

if(in_array($img_ex_lc, $allowed_exs)){
$new_img_name = $username. '.' .$img_ex_lc;
$img_upload_path = '../../uploads/'.$new_img_name;
move_uploaded_file($tmp_name,$img_upload_path);
}       else{
           $em = "Change image file type";
           header("Location: signup.php?error=$em&$data");
           exit; 
                }
            }
            else{
                $em = "Unknown error occured";
           header("Location: signup.php?error=$em&$data");
           exit; 
            }

           }
           $password = password_hash($password, PASSWORD_DEFAULT);
           if(isset($new_img_name)){
               $sql = "INSERT INTO users (name,username,password,p_p)VALUES(?,?,?,?) ";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$name,$username,$password,$new_img_name]);
           }
           else{
            $sql = "INSERT INTO users (name,username,password,)VALUES(?,?,?) ";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$name,$username,$password,]);
           }
           $sm = "Account created succesfully";
           header("Location: /index.php?seccess=$sm");
           exit;
       }
    }
}

?>