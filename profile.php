<?php
include("dbconfig.php");
session_start();
$email=$_SESSION['email'];
 $q = "SELECT * FROM `register` WHERE Email='$email'";
 $r = mysqli_query($con,$q);
 $total = mysqli_num_rows($r);
 $row = mysqli_fetch_array($r)
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<style> 
		#head1{background-color:white;
			   padding-bottom:20px;
			   outline-style:ridge;
		       outline-color:darkturquoise ;
			   width:90%;
			   margin-left:60px;
			   margin-top:10px;
			   }
		#logo{
		      margin-left:20px;
			  font-size:40px;
		      color:darkturquoise}	  
		#logout{float:right;
		       margin-top:23px;
		       margin-right:45px}
	    #bar1,#bar2{float:right;
		      margin-right:15px;color:gray}		
		#icon1{float:right;
		      margin-top:21px;
		      margin-right:20px;
			  color:lightblue
			  }
		#icon1:hover{color:turquoise;}
		#faq{float:right;margin-top:6px;
		     margin-right:19px;color:black
			 }
		#faq:visited{color:black}
		#cont1{height:auto;
		background-color:white;
		margin-top:50px;
		width:60%;
		outline-style:ridge;
		outline-color:darkturquoise;
		}
		
	</style>
</head>
<body style="background-color:aliceblue ;background-image:url(faqb.jpg)">
	<div class="row" id="head1">
		<div class="col-md-3" id="logo"><h1>ampleSAMPLES</h1></div>
		<a class="btn btn-info"  href="logout.php" id="logout">Logout</a>
		<h1 id="bar1">|</h1>
	    <i id="icon1" title="Profile" class="fa fa-user fa-3x" aria-hidden="true"></i>
		<h1 id="bar2">|</h1>
		<h1><a id="faq" href="faq.php">FAQ</a></h1>	
	</div>
		<div class="container" id="cont1">
		<h2><?php echo $row[0] ?></h2>
		<hr style="border-top:3px double rgb(26, 24, 89)">
		<h3><strong>Username:</strong><?php echo $row['Name'];?>
		<hr style="border-top:1px dashed #1A1859">
		<h3><strong>Registration number:</strong><?php echo $row['Reg no.'] ?></h3>
		<hr style="border-top:1px dashed #1A1859">
		<h3><strong>Gender:</strong><?php echo $row['Gender'] ?></h3>
		<hr style="border-top:1px dashed #1A1859">
		<h3><strong>Father's Name:</strong><?php echo $row[8] ?></h3>
		<hr style="border-top:1px dashed #1A1859">
		<h3><strong>Contact:</strong><?php echo $row['Contact'] ?></h3>
		<hr style="border-top:1px dashed #1A1859">
		<h3><strong>Course:</strong><?php echo $row['Course'] ?></h3>
		<hr style="border-top:1px dashed #1A1859">
		<h3><strong>Year:</strong><?php echo $row['Year'] ?></h3>
		<hr style="border-top:3px double #1A1859">
		<h2><strong>Rating Graph</strong></h2>
		<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
		<br>
		<hr style="border-top:3px double darkturquoise">
		<h2>Quiz Given</h2>
		<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
		<br>
		<hr style="border-top:3px double darkturquoise">
		<h2>Performance Detail</h2>
		<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
		<br>
	</div>
</body>
</html>