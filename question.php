<?php
include("dbconfig.php");
session_start();
?>
<!doctype html>
<html><head>
<meta charset="utf-8">
<title>QUIZ</title>
<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>

<body>
<header>
<div class="panel panel-default">

<div class="panel-heading"><h2>
<center>QUIZ</center>
</h2></div>
</header>
<script>

var total_seconds = 30;
var next ="<?php $number ?>";
var c_minutes = Math.floor(total_seconds/60);
	var c_seconds = Math.floor(total_seconds%60);
	//console.log (ele);
	console.log (c_minutes);
	console.log (c_seconds);
	    var x = setInterval(function() {
	//var c_minutes = Math.floor(total_seconds/60);
	var c_seconds = Math.floor(total_seconds%60);
	//console.log (ele);
	console.log (c_minutes);
	console.log (c_seconds);
			document.getElementById("timer").innerHTML = ' TIME LEFT:   ' +   c_seconds + '   seconds' ;	
		
		 if(total_seconds<=0)
		 {  
			 setTimeout('document.quiz.submit');
			  clearInterval(x);
			 //alert("TIME UP FOR THIS QUESTION");
			window.location.href("question.php?n=next+1");
		 }
		 else
		 {
			 total_seconds=total_seconds-1;
		 }
		 
}, 1000);
	
	
    </script>
   
    <?php
	//$content = file_get_contents($url);
//$json = json_decode($content, true);
	$number = (int) $_GET['n'];
     $section = $_SESSION['section'];
	 
	echo "<b>SECTION: </b>".$section;
	   $quizid =$_SESSION['quizid'];
   if($section == "core")
{           
 // getting quizid 
	 /*$f = "SELECT MAX(QuizID) FROM core_quiz";
	 $q = mysqli_query($con,$f);
$ans = mysqli_fetch_array($q);
		$quizid = $ans[0];
		*/
			$r = "SELECT * FROM consultancy_quiz WHERE QuizID ='$quizid'";
		$j=mysqli_query($con,$r);
	$total = mysqli_num_rows($j);
			$r = "SELECT * FROM core_quiz WHERE QuizID ='$quizid' AND ques_no='$number' ";
		$j=mysqli_query($con,$r);
		
		//print_r($j);
		$a = mysqli_fetch_array($j);
		$duration = $a["time"];
		$_SESSION["duration"]=$duration;
$r = "SELECT * FROM core_quiz WHERE QuizID ='$quizid' AND ques_no='$number' ";
		$j=mysqli_query($con,$r);
				
}
if($section == "software")
{      /*  $f = "SELECT MAX(QuizID) FROM soft_quiz";
	 $q = mysqli_query($con,$f);
$ans = mysqli_fetch_array($q);
//		$quizid = $ans[0]; 
		<br>
*/
			$r = "SELECT * FROM soft_quiz WHERE QuizID ='$quizid' ";
		$j=mysqli_query($con,$r);
	$total = mysqli_num_rows($j);
		$r = "SELECT * FROM soft_quiz WHERE QuizID ='$quizid' AND ques_no = '$number'";
		$j=mysqli_query($con,$r);
//		print_r($j);
		
		$a = mysqli_fetch_array($j);
		$duration = $a["time"];
		$_SESSION["duration"]=$duration;
// echo $total;
	    $r = "SELECT * FROM soft_quiz WHERE QuizID ='$quizid' AND ques_no = '$number'";
		$j=mysqli_query($con,$r);
}
if($section == "finance")
{ 
/*
	 $f = "SELECT MAX(QuizID) FROM finance_quiz";
	 $q = mysqli_query($con,$f);
$ans = mysqli_fetch_array($q);
		$quizid = $ans[0];
	*/	
		
			$r = "SELECT * FROM finance_quiz WHERE QuizID ='$quizid'";
		$j=mysqli_query($con,$r);
	$total = mysqli_num_rows($j);
	
		$r = "SELECT * FROM finance_quiz WHERE QuizID ='$quizid' AND ques_no = '$number' ";
		$j=mysqli_query($con,$r);
		
		
		$a = mysqli_fetch_array($j);
		$duration = $a["time"];
		$_SESSION["duration"]=$duration;
		$r = "SELECT * FROM finance_quiz WHERE QuizID ='$quizid' AND ques_no = '$number' ";
		$j=mysqli_query($con,$r);
//		print_r($j);
//echo $total;

}
if($section == "consultancy")
{
/*	      $f = "SELECT MAX(QuizID) FROM consultancy_quiz";
	 $q = mysqli_query($con,$f);
$ans = mysqli_fetch_array($q);
		$quizid = $ans[0];
		*/
	//get total 
	$r = "SELECT * FROM consultancy_quiz WHERE QuizID ='$quizid'";
		$j=mysqli_query($con,$r);
	$total = mysqli_num_rows($j);
	
		
		
		$r = "SELECT * FROM consultancy_quiz WHERE QuizID ='$quizid' AND ques_no = '$number'";
		$j=mysqli_query($con,$r);
//		print_r($j);
		
		$a = mysqli_fetch_array($j);
		$duration = $a["time"];
		$_SESSION["duration"]=$duration;
		$r = "SELECT * FROM consultancy_quiz WHERE QuizID ='$quizid' AND ques_no = '$number'";
		$j=mysqli_query($con,$r);

// echo $total;
}   
if($number > $total)
{
	header ("Location:final.php");
}
		
      
		?>

<main>
<div class="container">
<div class="panel-body">
<div id="time" style="visibility:hidden"><?php
echo $duration;
?></div>
<div id="timer" class="panel panel-warning">
</div>

    <div class="current">
          
    <!--submission form-->
    
    <form method="post" action="process.php" name="quiz">
    <ul class="choice list-group" type="none">
<li class="list-group-item-danger">
    QUESTION <?php echo $number;?> OF <?php echo $total; ?></li>
    </div>
    <div class="list-group-item active">
    <?php
	// to get questions
	 while($row = mysqli_fetch_array($j))
	 {
		 echo $row[2] ;
	 }
	?>
    </div>
    
    
      
    <?php
$section = $_SESSION['section'];
  if($section == "core")
{           
/*$f = "SELECT MAX(QuizID) FROM core_quiz";
	 $q = mysqli_query($con,$f);
$ans = mysqli_fetch_array($q);
		$quizid = $ans[0];*/
			$r = "SELECT * FROM core_ans WHERE QuizID ='$quizid' AND ques_no ='$number' ";
		$res =mysqli_query($con,$r);				
}
if($section == "software")
{
	/*        $f = "SELECT MAX(QuizID) FROM soft_quiz";
	 $q = mysqli_query($con,$f);
$ans = mysqli_fetch_array($q);
		$quizid = $ans[0];  
		*/
		$r = "SELECT * FROM soft_ans WHERE QuizID ='$quizid' AND ques_no = '$number'";
		$res=mysqli_query($con,$r);
		
	    
}
if($section == "finance")
{    
/*	        $f = "SELECT MAX(QuizID) FROM soft_quiz";
	 $q = mysqli_query($con,$f);
$ans = mysqli_fetch_array($q);
		$quizid = $ans[0];
	*/	
		
		$r = "SELECT * FROM finance_ans WHERE QuizID ='$quizid' AND ques_no = '$number' ";
		$res=mysqli_query($con,$r); 

}
if($section == "consultancy")
{
/*	      $f = "SELECT MAX(QuizID) FROM consultancy_quiz";
	 $q = mysqli_query($con,$f);
$ans = mysqli_fetch_array($q);
		$quizid = $ans[0];
		*/
		$r = "SELECT * FROM consultancy_ans WHERE QuizID ='$quizid' AND ques_no = '$number'";
		$res=mysqli_query($con,$r);
		
		
}
		 while($row = mysqli_fetch_array($res))
		 { 
          echo "<li class='list-group-item'><input type='radio' name='choice' value=".$row['QuizID'].">&nbsp;&nbsp;".$row['choice']."</li>";
		 }
		 ?>
               
    </ul>
    <br/>
    <input type="submit" name="submit" class="img-rounded"/>
    <input type="hidden" name="number" value="<?php echo $number; ?>"/> 
    <input type="hidden" name="section" value="<?php echo $section; ?>"/>
    <input type="hidden" name="quizid" value="<?php echo $quizid; ?>"/>
    </form>
    
   </div>
</div>
</main>
<footer>
<div class="panel-footer">
Copyrights@www.ampleSamples.com
</div>
</footer>
</div>
</body>
</html>