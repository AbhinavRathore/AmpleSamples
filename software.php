<?php
include("dbconfig.php");
session_start();
 $q = "SELECT * FROM `quiz_details` WHERE Section='software'";
 $r = mysqli_query($con,$q);
$_SEESION['section'] ="software";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Categories</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<style> 
		#head1{background-color:white;
			   padding-bottom:20px;
			   outline-style:ridge;
		       outline-color:darkturquoise }
		#logo{margin-top:10px;
		      margin-left:20px;
			  font-size:40px;
		      color:darkturquoise}	  
		#logout{float:right;
		       margin-top:25px;
		       margin-right:45px}
	    #bar1,#bar2{float:right;
		      margin-right:15px;color:gray}		
		#icon1{float:right;
		      margin-top:23px;
		      margin-right:20px;
			  color:lightblue
			  }
		#icon1:hover{color:turquoise;}
		#faq{float:right;margin-top:7px;
		     margin-right:19px;color:black
			 }
		#faq:visited{color:black}
		#cont2{	background-color:snow;margin-top:50px}
		
	</style>
</head>

<body style="background-color:white">
	
	<div class="row" id="head1">
		<div class="col-md-3" id="logo"><h1>ampleSAMPLES</h1></div>
		<button class="btn btn-info" id="logout">Logout</button>
		<h1 id="bar1">|</h1>
	    <i id="icon1" title="Profile" class="fa fa-user fa-3x" aria-hidden="true"></i>
		<h1 id="bar2">|</h1>
		<h1><a id="faq" href="#">FAQ</a></h1>	
	</div>
	
	<div id="cont2" class="container">
		<div class="row">
			<div class="jumbotron" id="host"><h1>Software</h1></div>
			
		</div>
	
	
	<?php
	 while($row = mysqli_fetch_array($r))
	 {  
		 echo "<blockquote><a href='quiz.php?section=software&quizid=".$row['quiz_id']."'>". $row[2]."</a></blockquote>" ;
	}
	?>
	<!--<b><a href="quiz.php?section=software">Quiz testing basic software knowledge?</a></b>
    	<br/>
    <b><a href="codeq.php">Quiz testing basic knowledge of Algorithms!</a></b>-->
    </div>
	<hr>
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>
</body>
</html>