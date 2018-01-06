<?php

session_start();
include ("dbconfig.php") ;
if(isset($_POST["submit"]))
{
  $name = $_POST["name"];
  $email = $_POST["email"];
  $pass = $_POST["psw"];
  $cpass = $_POST["psw-repeat"];
  	
  
  $q= "INSERT INTO `user_details` (`name`, `email`, `password`) VALUES ('$name' , '$email' ,MD5('$pass') )";
  
  $r = mysqli_query($con,$q);
   if(mysqli_affected_rows($con))
  {  
     session_start();	
		$_SESSION['email']=$email;
		header("location:main.php");	
	 
  }
}
?>