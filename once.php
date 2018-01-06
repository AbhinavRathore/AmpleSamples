<?php
include("dbconfig.php");
?>
<?php
$q = "SELECT IDENT_CURRENT('soft_quiz') as QuizID";
$ans =mysqli_query($con,$q);
echo $ans;

?>

<?php
$section = $_GET['section'];
//echo $section;
if($section == "core")
{
	$quid ="SELECT MAX(QuizID) FROM core_quiz";
$quizid = mysqli_query($con,$quid);}
if($section == "software")
{  echo "1";
	$quid ="SELECT MAX(QuizID) FROM soft_quiz";
		$q = mysqli_query($con,$quid);
	
}
if($section == "finance")
{
	$quid ="SELECT MAX(QuizID) FROM finance_quiz";
		$quizid = mysqli_query($con,$quid);
}
if($section == "consultancy")
{
	$quid ="SELECT MAX(QuizID) FROM consultancy_quiz";
		$quizid = mysqli_query($con,$quid);
		
}
//$quizid =$quizid+1;
//echo "<b><em>YOUR QUIZ ID IS:".$quizid."</b></em>";
?>