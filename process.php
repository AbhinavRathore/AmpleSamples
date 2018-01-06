<?php
include "dbconfig.php";
session_start();

?>
<?php
//Check to see if score is set_error_handler
if(!isset($_SESSION['score']))
{
	$_SESSION['score'] = 0;
	 $_SESSION['attempt'] = 0;
	 setrawcookie($score,0,time()+3*3600);
	 setrawcookie($attempt,0,time()+3600*3);
	 $flag=0;
}
 
 if($_POST["submit"])
 {   $number = $_POST['number'];
	$selected_choice  = $_POST['choice'];
	$quizid = $_POST['quizid'];
	$section = $_POST['section'];
		 $next = $number+1 ;
	if($selected_choice!='')
	 {
		 
	 $_SESSION['attempt']++;
	  $_COOKIE[$attempt]++;
	echo $number ;
	echo "<br/>";
	echo $selected_choice;
	
  
	
	/*get correct choice*/
	
	if($section =="software")
	{ echo $query ="SELECT * FROM soft_ans WHERE ques_no =$number AND is_correct = 1 and QuizID =$quizid";
	 
	 $result = mysqli_query($con,$query);
	 
	 $ans = mysqli_fetch_array($result);
	  if(!$flag)
	{ // get total
	 	 $q = "SELECT * FROM soft_quiz WHERE QuizID =$quizid ";
	$res = mysqli_query($con,$q);
	$tot =mysqli_num_rows($res);
	$_SESSION['total'] = $tot; 
	$flag=1;
	}
	}
	if($section =="core")
	{ echo $query ="SELECT * FROM core_ans WHERE ques_no =$number AND is_correct = 1 and QuizID =$quizid";
	 
	 $result = mysqli_query($con,$query);
	 
	 $ans = mysqli_fetch_array($result);
	 // get total
	 if(!$flag)
	 	 {$q = "SELECT * FROM core_quiz WHERE QuizID =$quizid ";
	$res = mysqli_query($con,$q);
	$tot =mysqli_num_rows($res);
	$_SESSION['total'] = $tot; 
	$flag=1;
		 }
	}
	 if($section =="finance")
	{ echo $query ="SELECT * FROM finance_ans WHERE ques_no =$number AND is_correct = 1 and QuizID = $quizid";
	 
	 $result = mysqli_query($con,$query);
	 
	 $ans = mysqli_fetch_array($result);
	  if(!$flag)
	 // get total
	{ 	 $q = "SELECT * FROM finance_quiz WHERE QuizID =$quizid ";
	$res = mysqli_query($con,$q);
	$total =mysqli_num_rows($res);
	$_SESSION['total'] = $tot; 
	$flag=1;
	}
	}
	 if($section =="consultancy")
	{ echo $query ="SELECT * FROM consultancy_ans WHERE ques_no =$number AND is_correct = 1 and QuizID = $quizid";
	 
	 $result = mysqli_query($con,$query);
	 
	 $ans = mysqli_fetch_array($result);
	 if(!$flag)
	 {// get total
	 	 $q = "SELECT * FROM consultancy_quiz WHERE QuizID =$quizid ";
	$res = mysqli_query($con,$q);
	$total =mysqli_num_rows($res);
	$_SESSION['total'] = $tot; 	$flag=1;}
	}
	
	 //print_r($ans);
	  if($ans['option_no'] ==  $selected_choice){
		  $_COOKIE[$score]++;
		  $_SESSION['score']++;
		  echo  $_SESSION['score'];
     }
	 }
	 else
	 {
		 header("Location:question.php?n=".$next);
	 }
 }
	 //die();
	  if($next == $total)
	  { header("Location:final.php");
		exit();
	   }
	 else
	{	
		header("Location:question.php?n=".$next);
	}
	
 


?>