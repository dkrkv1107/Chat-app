<?php
 session_start();
 include_once "config.php";
 $sql = mysqli_query($conn, "SELECT * FROM users");
 $output = " ";

 if(mysqli_num_rows($sql) == 1){
     $output = "No users available to chat";
 }elseif(mysqli_num_rows($sql) > 0){
     while($row = mysqli_num_rows($sql)){
         $output = '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['fname']. " " . $row['lname'] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a> ';
     }
 }



?>