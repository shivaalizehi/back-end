<?php

require_once 'db.php';

 
  $display_name=$_POST['display-name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $password_conf=$_POST['password-conf'];
  
  if($password != $password_conf){
  	echo 'error ! not same passwords';
  }
  else{




  $register=mysqli_query($db,"INSERT INTO users (display_name,email,password) VALUES ('$display_name','$email','$password')");
  if($register){
  	echo 'done';
  }
  else{
  	echo 'error';
  }
  }
?>