<?php
     require_once 'db.php';




     $email=$_POST['email'];
     $password=$_POST['password'];
      

 $check=mysqli_query($db,"SELECT * FROM users WHERE email='$email' AND password='$password'");
 if(mysqli_num_rows($check)>0) {
 	echo 'welcome';

 }
 else{
 	echo 'you do not register yet'; 
 }






?>