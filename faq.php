<?php
include("dbconfig.php");
 $q1 = "SELECT * FROM `faq` WHERE Section='software'";
 $r1 = mysqli_query($con,$q1);
 $q2 = "SELECT * FROM `faq` WHERE Section='core'";
 $r2 = mysqli_query($con,$q2);
 $q3 = "SELECT * FROM `faq` WHERE Section='finance'";
 $r3 = mysqli_query($con,$q3);
 $q4 = "SELECT * FROM `faq` WHERE Section='consultancy'";
 $r4 = mysqli_query($con,$q4);
 
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
			   margin-top:10px
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
		#cont1{height:auto;
		background-color:white;
		margin-top:50px;
		width:80%;
		outline-style:ridge;
		outline-color:darkturquoise;
		}
		#foot1 p,#foot2 p{font-family: times, Times New Roman, times-roman, serif;
		       color:black}
		.nav-tabs{
      background-color:white;
    }
    .tab-content{
    background-color:#1A1859;
    color:#fff;
    padding:5px
    }
    .nav-tabs > li > a{
     border: medium none;
     }
    .nav-tabs > li > a:hover{
     background-color: #303136 !important;
    border: medium none;
    border-radius: 0;
    color:#fff;
    }
	</style>
</head>
<body style="background-color:aliceblue;background-image:url(faqb.jpg)">
	<div class="row" id="head1">
		<div class="col-md-3" id="logo"><h1>ampleSAMPLES</h1></div>
		<button class="btn btn-info" id="logout">Logout</button>
		<h1 id="bar1">|</h1>
	    <i id="icon1" title="Profile" class="fa fa-user fa-3x" aria-hidden="true"></i>
		
			
	</div>
	<div class="container" id="cont1">
	
	 <img src="faq.jpg" alt="Frequently Asked Questions" style="margin-left:200px">
	 <hr>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Software</a></li>
    <li><a data-toggle="tab" href="#menu1">Core</a></li>
    <li><a data-toggle="tab" href="#menu2">Finance</a></li>
    <li><a data-toggle="tab" href="#menu3">Consultancy</a></li>
  </ul>
   
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Software Queries</h3>
	  <?php
	 while($row = mysqli_fetch_array($r1))
	 {  
		 echo "<blockquote>Quiz Id:". $row[1]."</blockquote>" ;
		 echo "<strong>->".$row[2]."</strong><br>";
		 echo $row[3]."<br><br><br>";
		 
	 }
	?>
      
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Core Quiz Queries:</h3>
       <?php
	 while($row = mysqli_fetch_array($r2))
	 {  
		 echo "<blockquote>Quiz Id:". $row[1]."</blockquote>" ;
		 echo "<strong>->".$row[2]."</strong><br>";
		 echo $row[3]."<br><br><br>";
		 
	 }
	?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Finance Quiz Queries:</h3>
       <?php
	 while($row = mysqli_fetch_array($r3))
	 {  
		 echo "<blockquote>Quiz Id:". $row[1]."</blockquote>" ;
		 echo "<strong>->".$row[2]."</strong><br>";
		 echo $row[3]."<br><br><br>";
		 
	 }
	?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Consultancy Quiz Queries:</h3>
       <?php
	 while($row = mysqli_fetch_array($r4))
	 {  
		 echo "<blockquote>Quiz Id:". $row[1]."</blockquote>" ;
		 echo "<strong>->".$row[2]."</strong><br>";
		 echo $row[3]."<br><br><br>";
		 
	 }
	?>
    </div>
  </div>
  <hr style="border-top:3px double black">
  <h3>Have a Query?Ask it?</h3>
  <div class="input-group input-group-lg col-md-12">
  <div class=>
  <input type="text" class="form-control" placeholder="Query">
  </div>
  
  <input type="submit" value="Submit" class="btn btn-info" style="width: 300px; margin: 0 auto;">
</div>
<br>
<br>
</div>
<hr>
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>
</body>
</html>