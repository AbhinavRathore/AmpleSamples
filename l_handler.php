<?php
include("dbconfig.php");

if(isset($_POST['login']))
{

$email= $_POST["email"];
$password = $_POST["password"];
	if($email=="" || $password=="")
	{
		echo "<br/>";
		echo "<b><center>PLEASE FILL THE FIELDS</center></b>";
	}
	else
	{$query ="SELECT * FROM register WHERE Email='$email' and Password='$password'";

	$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result))
		{
		session_start();	
		$_SESSION['email']=$email;
		header("location:categories.php");	
		}
		else
				{
		echo "<script type=\"text/javascript\">window.alert('Wrong Username or Password.');
		window.location.href = 'index.php';</script>"; 

		
		}
}}

?> 