
<?php
include("dbconfig.php");

session_start();

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consultancy</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<style> 
		#head1{background-color:white;
			   padding-bottom:20px;
			   outline-style:ridge;
		       outline-color:darkturquoise;
			   width:95%;
			   margin-left:34px;
			   margin-top:10px}
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
		#soft{ background-image:url(software2.jpg);width:300px;height:300px;font-size:60px;}
		#core {margin:70px 250px 100px 150px; background-image:url(core2.jpg);width:300px;height:300px;font-size:60px;}
		#fina{background-image:url(finance2.jpg);width:300px;height:300px;font-size:60px;}
		#consul{margin:70px 250px 100px 150px; background-image:url(consultancy2.png);width:300px;height:300px;font-size:50px;}
		#icon1:hover{color:turquoise;}
		#faq{float:right;margin-top:7px;
		     margin-right:19px;color:black
			 }
		#faq:visited{color:black}
		#cont1{	background-color:white;margin-top:50px}
	
	</style>
</head>

<body style="background-color:white; ;">
	
	<div class="row" id="head1">
		<div class="col-md-3" id="logo"><h1>ampleSAMPLES</h1></div>
		<button class="btn btn-info" id="logout">Logout</button>
		<h1 id="bar1">|</h1>
	    <i id="icon1" title="Profile" class="fa fa-user fa-3x" aria-hidden="true"></i>
		<h1 id="bar2">|</h1>
		<h1><a id="faq" href="faq.php">FAQ</a></h1>	
	</div>
	
		<div class="container" id="cont1" style="background-color:snow">
		<h3 style="font-family: times, Times New Roman;">It is good to know that you would like to host your programming contest on ampleSAMPLES. Please choose your section and fill the details below to apply for hosting your contest to us.</h3>
		<br>
		<hr>
		<h1 style="font-family: times, Times New Roman; text-align:center">Choose your Section</h1>
        
       
           
    
<a class="btn btn-info btn-lg"  href="sec_core.php" id="core" >Core</a>	
    <a  class="btn btn-info btn-lg" href="sec_software.php" id="soft"  >Software</a>

<br/>
<a  class="btn btn-info btn-lg" href="sec_consultancy.php" id="consul"  >Consultancy</a>

    <a class="btn btn-info btn-lg" href="sec_finance.php" id="fina" >Finance</a>



<!--Footer -->
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>

</body>
</html>