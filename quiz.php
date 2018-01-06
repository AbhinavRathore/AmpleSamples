<?php
include("dbconfig.php");
session_start();

$section = $_GET['section'];
// get the overall time for contest
echo "SECTION  ".$section;
echo "<br/>";
$_SESSION['section'] = $section;
//echo $section1;
//setrawcookie($section_cookie,'$section',time()+(3600*3),"/");

// getting quizid 
$quizid =$_GET['quizid'];
$_SESSION['quizid'] = $quizid;
if($section == "core")
{
	//$quid ="SELECT MAX(QuizID) FROM core_quiz";
//$q = mysqli_query($con,$quid);
//$ans = mysqli_fetch_array($q);
	//	$quizid = $ans[0];
		//echo "<br/>";
   //echo "QUIZ ID IS: <br/>";		
	// 	echo $quizid;
		
		$r = "SELECT * FROM core_quiz WHERE QuizID =$quizid ";
		$j=mysqli_query($con,$r);
		$total = mysqli_num_rows($j);
//		echo $total;
		
}
if($section == "software")
{  //echo "1";

		
		$r = "SELECT * FROM soft_quiz WHERE QuizID =$quizid ";
		$j=mysqli_query($con,$r);
		$total = mysqli_num_rows($j);
//		echo $total;
	    
}
if($section == "finance")
{		
		$r = "SELECT * FROM finance_quiz WHERE QuizID =$quizid ";
		$j=mysqli_query($con,$r);
		$total = mysqli_num_rows($j);
//		echo $total;
}
if($section == "consultancy")
{
		$r = "SELECT * FROM consultancy_quiz WHERE QuizID =$quizid ";
		$j=mysqli_query($con,$r);
		$total = mysqli_num_rows($j);
//		echo $total;	
}

echo "QUIZ ID :".$quizid;
$query ="SELECT * FROM quiz_details WHERE Section='$section' and quiz_id ='$quizid' ";
$res=mysqli_query($con,$query);
$dur =mysqli_fetch_array($res);
$duration = $dur["duration"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>QUIZ</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<style>
.container
{
	margin:0 auto;
	overflow:hidden;
}
</style>
</head>

<body>

<div class="container">
<h2 class="bg-info" align="center">
QUIZ
</h2>
<div class="jumbotron">
TEST YOUR KNOWLEDGE

<ul type="none" class="list-group">
<li class="list-group-item">
<strong>NO. OF QUESTIONS</strong> : <?php echo $total;?>
</li>
<li>
<div class="col-sm-4">
<strong>TIME LIMIT :</strong> </div>
<div class="col-md-4 col-sm-10"><?php echo $duration; ?></div>
<ul type="none" class="list-group">
<!--<li class="list-group-item"><b>FOR DIFFICULT ONE</b> : 4 min</li>
<li class="list-group-item"><b>FOR MEDIUM ONE</b> : 2.5 min</li>
<li class="list-group-item"><b>FOR EASY ONE</b> : 1.5 min</li>  
</ul>
</li>-->
<li class ="list-group-item">
</li>
</ul>
<button><a href="question.php?n=1">START QUIZ</a></button></div>
<footer>
<div class="container">
Copyrights@www.mockpro.com
</div>
</footer>
</div>
</body>
</html>