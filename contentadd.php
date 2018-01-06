<?php
session_start();
include ("dbconfig.php") ;
if(isset($_POST['submit']))
{
	
	$ques =$_POST['question_text'];
	   // $section= $_GET['section'];
	  $section=$_SESSION['section'];
	 
	
	$choice1 = $_POST['choice1'];
	$choice2 = $_POST['choice2'];
	$choice3 = $_POST['choice3'];
	$choice4 = $_POST['choice4'];
	$ans = $_POST['correct_choice'];
	 $choices = array($choice1,$choice2,$choice3,$choice4);
	
	//$quizid= $_SESSION['quizid'];
	// echo $section;
	 /*IF SECTION IS CONSULTANCY*/

	 $quid ="SELECT MAX(quiz_id) FROM quiz_details WHERE section='$section'";
		$quiz = mysqli_query($con,$quid);
		
		$row = mysqli_fetch_array($quiz);
		$quizid=$row[0];
		
		
	$i=1;
	
	if($section == "consultancy")
	{   
	    
		 $quid ="SELECT MAX(ques_no) FROM consultancy_quiz WHERE QuizID='$quizid'";
	 $rr = mysqli_query($con,$quid);
		
		$row = mysqli_fetch_array($rr);
		$prevques=$row[0];
		if($prevques=='')
			$ques_no=1;
		else
			$ques_no=$prevques+1;
	
		$q= " INSERT INTO consultancy_quiz(QuizID,ques_no,ques) VALUES ('$quizid','$ques_no','$ques') ";
       $r = mysqli_query($con,$q);
	
	foreach($choices as $choice)
	{
		
			if($ans == $i){$is_correct =1;
			}
			else{
				$is_correct =0;}
				
		//choice query
		
		$query ="INSERT INTO consultancy_ans(QuizID,ques_no,is_correct,choice,option_no) values('$quizid','$ques_no','$is_correct','$choice','$i')";
		$res = mysqli_query($con,$query);
		$i=$i+1;		
		
	
} 
}
//IF SECTION IS CORE
 if($section == "core")
 {
	 $quid ="SELECT MAX(ques_no) FROM core_quiz WHERE QuizID='$quizid'";
	 $rr = mysqli_query($con,$quid);
		
		$row = mysqli_fetch_array($rr);
		$prevques=$row[0];
		if($prevques=='')
			$ques_no=1;
		else
			$ques_no=$prevques+1;
		
		
		$q= " INSERT INTO core_quiz(QuizID,ques_no,ques) VALUES ('$quizid','$ques_no','$ques') ";
       $r = mysqli_query($con,$q);
	
	foreach($choices as $choice)
	{
		
			if($ans == $i){$is_correct =1;
			}
			else{
				$is_correct =0;}
				
		//choice query
		
		$query ="INSERT INTO core_ans(QuizID,ques_no,is_correct,choice,option_no) values('$quizid','$ques_no','$is_correct','$choice','$i')";
		$res = mysqli_query($con,$query);
		$i=$i+1;		
		
	
} 
 }
 
 
 if($section == "software")
 {
		
		 $quid ="SELECT MAX(ques_no) FROM soft_quiz WHERE QuizID='$quizid'";
	 $rr = mysqli_query($con,$quid);
		
		$row = mysqli_fetch_array($rr);
		$prevques=$row[0];
		if($prevques=='')
			$ques_no=1;
		else
			$ques_no=$prevques+1;
		$q= " INSERT INTO soft_quiz(QuizID,ques_no,ques) VALUES ('$quizid','$ques_no','$ques') ";
       $r = mysqli_query($con,$q);
	
	foreach($choices as $choice)
	{
		
			if($ans == $i){$is_correct =1;
			}
			else{
				$is_correct =0;}
				
		//choice query
		
		$query ="INSERT INTO soft_ans(QuizID,ques_no,is_correct,choice,option_no) values('$quizid','$ques_no','$is_correct','$choice','$i')";
		$res = mysqli_query($con,$query);
		$i=$i+1;		
		
	
} 
 

}
 
 //IF SECTION IS FINANCE
 if($section == "finance")
 {
		 $quid ="SELECT MAX(ques_no) FROM finance_quiz WHERE QuizID='$quizid'";
	 $rr = mysqli_query($con,$quid);
		
		$row = mysqli_fetch_array($rr);
		$prevques=$row[0];
		if($prevques=='')
			$ques_no=1;
		else
			$ques_no=$prevques+1;
		$q= " INSERT INTO finance_quiz(QuizID,ques_no,ques) VALUES ('$quizid','$ques_no','$ques') ";
       $r = mysqli_query($con,$q);
	
	foreach($choices as $choice)
	{
		
			if($ans == $i){$is_correct =1;
			}
			else{
				$is_correct =0;}
				
		//choice query
		
		$query ="INSERT INTO finance_ans(QuizID,ques_no,is_correct,choice,option_no) values('$quizid','$ques_no','$is_correct','$choice','$i')";
		$res = mysqli_query($con,$query);
		$i=$i+1;
} 
} 

 
$qq= "SELECT no_question FROM `quiz_details` WHERE section='$section' and quiz_id=$quizid";
$quiz = mysqli_query($con,$qq);
		
		$row = mysqli_fetch_array($quiz);
		$noques=$row[0];
		if($noques==$ques_no)
			header("location:finish.php");
		else
			header("location:add.php");
}
 
	 //answer query
	 
?>

