

<link href="css/bootstrap.css" rel="stylesheet" />
<style>
.container{
	width:500px;
	position:absolute;
	top:20%;
	left:30%;
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	font-weight:500;
	font-size:17px;
}
.jumbotron{
	background:linear-gradient(lightgrey,white,grey);
}
#message
{
	font-weight:600;
	text-shadow:1.2px 1.2px 2px whitesmoke;
}
a:hover
{
	color:red;
	font-size:18px;
}
</style>
<?php
include("dbconfig.php");
session_start();
?>

<div class="container">
<div class="jumbotron text-center">
<div id="message">
<?php
 $t= $_SESSION['total'];
$score =$_SESSION['score'];
$attempt =$_SESSION['attempt'];

//$attempt1 = $_COOKIE[$attempt];
//$score1 = $_COOKIE[$score];

if($score > ($t)*(0.80))
 {    echo "<div class='text-success'>WELL DONE ! YOU PERFORMED EXCELLENT </div>";
 }
 else
 if ($score >($t) *(0.60))
 {
	 echo "<div class='text-active'>GOOD PERFORMANCE !! KEEP IT UP </div>" ;
 }
 else if ($score >($t) *(0.45))
 {
	 echo "<div class='text-warning'>NICE ATTEMPT !! </div>";
 }
 else
 {
	echo "<div class='text-danger'>WORK HARD !! YOU CAN PERFORM WELL </div>"; 
 }
?>
</div>
<br/>
<b>YOUR SCORE : <?php echo $score; ?></b>
<br/>
<br/>
NO. OF QUESTIONS ATTEMPTED : <b><?php echo $attempt; ?>
</b><br/>
<br/>
WRONG QUESTIONS : <b><?php echo ($attempt - $score) ; ?></b>


</div>
<div class="text-center">
<a href= "review.php">REVIEW THE QUESTIONS</a>
<br/>
<br/>
<a href ="profile.php">VIEW YOUR PROFILE</a></div>
</div>
<?php
unset($_SESSION['section']);
?>