<?php
session_start();
include ("dbconfig.php") ;
if(isset($_POST["submit"]))
{
  $username = $_POST["username"];
  $regno = $_POST["regno"];
  $pass = $_POST["password"];
  $cpass = $_POST["cpassword"];
  $fathname = $_POST["fathname"];
  $gender = $_POST["gender"];
  $contact = $_POST["contact"];
  $email = $_POST["email"];
  $course = $_POST["program"];
  $year = $_POST["year"];	
  $cpi = $_POST["cpi"];		
  
  $q= "INSERT INTO `register` (`Name`, `Reg no.`, `Password`, `Father's name`, `Gender`, `Contact`, `Email`, `Course`, `Year`, `CPI`) VALUES ('$username' , '$regno' ,MD5('$pass') , '$fathname' , '$gender' , '$contact' , '$email' , '$course' , '$year' , '$cpi')";
  
  $r = mysqli_query($con,$q);
   if(mysqli_affected_rows($con))
  {
	  echo " successfully registered" ;
  }
}
?>