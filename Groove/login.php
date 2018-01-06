<?php

session_start();
include ("dbconfig.php") ;
if(isset($_POST["submit"]))
{

  $email = $_POST["email"];
  $pass = $_POST["psw"];
  
  	
  
  $q= "SELECT * FROM user_details WHERE email='$email' ";
  
  
  $r = mysqli_query($con,$q);
  echo mysqli_error($con);
  $row=mysqli_fetch_array($r,MYSQL_ASSOC);
  
 // echo $pass;
  if(MD5($pass)==$row["password"])
 {  
     session_start();	
		$_SESSION['email']=$email;
		header("location:main.php");	
	 
  }
 else
  {
	 echo '<script language="javascript">';
echo 'alert("Password dont match")';
echo '</script>';
  }
}
?>