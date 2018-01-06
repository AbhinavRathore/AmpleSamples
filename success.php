<?php
include("dbconfig.php");
session_start();
?>
<!--SUBMISSION OF QUIZ DETAILS -->
<?php

if(isset($_POST['submit']))
{$test_admin = $_POST['admin_name'];
$email = $_POST['admin_email'];
$quiz = $_POST['quizdet'];
$date = $_POST['conduct_date'];
$time = $_POST['conduct_time'];
$section = $_SESSION['section'];
$no_ques=$_POST['noques'];

echo $section ;
$quid ="SELECT MAX(quiz_id) FROM quiz_details WHERE section='$section'";
		$qu = mysqli_query($con,$quid);
		$row = mysqli_fetch_array($qu);
		$quiz_id=$row[0];
		$quiz_id=$quiz_id+1;
		
		
$query ="INSERT INTO quiz_details (`Section`, `quiz_id`, `quiz_description`, `test_admin`, `email`, `conduct_date`, `conduct_time`,`no_question`) VALUES ('$section','$quiz_id','$quiz','$test_admin','$email','$date','$time','$no_ques')";
$r = mysqli_query($con,$query);


//INSERT INTO QUIZ_DETAILS

if(isset($_POST['check1']))
{
	
	$time1=  $_POST['time1'];
	$query ="INSERT INTO quiz_details (duration) VALUES('$time1')";
	$r = mysqli_query($con,$query);
}
if(isset($_POST['check2']))
{
	$time2 = $_POST['time2'];
	$time3 = $_POST['time3'];
}
header("location:add.php");	
}
		


?>