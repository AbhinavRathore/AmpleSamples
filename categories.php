<?php

session_start();
echo "WELCOME".$_SESSION['email'];
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
			   outline-style:ridge;
		       outline-color:darkturquoise ;
			   position:fixed;
			   top:0px;
			   width:100%;
			   height:100px;z-index:2;
			   }
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
		#cont1{margin-top:120px;
		       background-color:white;position:relative;
			   }
		#c1,#c3{width:330px;margin-left:170px;margin-top:60px}
		
		#c2,#c4{width:330px;margin-right:170px;margin-top:60px;float:right;}
		#upper{font-family: times, Times New Roman, times-roman, serif;
		       padding-bottom:40px;
			   background-color:darkturquoise;
}
		#cont2{	background-color:pink;margin-top:50px;position:relative;}
		#host{margin-top:250px;	
		      font-family: times, Times New Roman, times-roman, serif;
		      margin-left:20px}
		#d1{width:535px; margin-top:60px;margin-bottom:60px}
		#foot1 p,#foot2 p{font-family: times, Times New Roman, times-roman, serif;
		       color:black}
	</style>
</head>

<body style="background-color:white">
	
	<div class="header" id="head1">
		<div class="col-md-3" id="logo"><h1>ampleSAMPLES</h1></div>
		<a class="btn btn-info"  href="logout.php" id="logout">Logout</a>
		<h1 id="bar1">|</h1>
	     <a href="profile.php"><i id="icon1" title="Profile" class="fa fa-user fa-3x" aria-hidden="true"></i></a>
		<h1 id="bar2">|</h1>
		<h1><a id="faq" href="faq.php">FAQ</a></h1>	
	</div>
	<div id="cont1" class="container-fluid content">
		<div class="row text-info" id="upper">
		<div class="col-md-3 col-md-offset-1" style="margin-top:40px"><img src="geek.jpg" width="200" alt="Software"></div>
		<div class="col-md-8">
		<blockquote style="margin-top:60px">
		<h1>This is the place to show off your skills!</h1>
		<h3>Try your hand at one of the sections to analyse your position among thousands of your comrades!</h3>
		</blockquote>
		</div>
		
		
		
		</div>
		<br>
		<br>
		<div class="col-md-3 col-md-offset-5"><a class="btn btn-lg btn-info" href="upcoming.php">Upcoming Tests</a></div>
		<br>
		<br>
		<br>
		<a id="c1" href="software.php"  class="btn"><img src="software.png" width="310" alt="Software"></a>
		<a id="c2" href="core.php" class="btn"><img src="core.png" width="310" alt="Core"></a>
		<a id="c3" href="finance.php" class="btn" style="margin-top:100px"><img src="finance.png" width="310" alt="Finance"></a>
		<a id="c4" href="consultancy.php" class="btn" style="margin-top:100px"><img src="consultancy.png" width="310" alt="Consultancy"></a>
		
	</div>
	<div id="cont2" class="container">
		<div class="row">
			<div class="col-md-5" id="host"><h1>HOST YOUR CONTEST!</h1></div>
			<div class="col-md-6"><a id="d1" href="conduct.php" class="btn" ><img src="test.png" width="510" alt="Software" ></a></div>
		</div>
	</div>
	
	<hr>
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>
</body>
</html>