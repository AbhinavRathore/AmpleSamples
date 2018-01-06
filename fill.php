<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration</title>
<<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script> 
<style>
#block1,#block2
{
display:none;
}
.container
{
	margin:0 auto;
	overflow:hidden;
}
   #cont1{
   width:60%;
   background-color:midnightblue;}
  #head {
    text-align: center;
    color: #252158;
    text-shadow: 2px 1.4px 1.4px #715f5f;
    box-shadow: 2px 0.4px 2.9px #3b6767;
    padding: 5px;
	background-color:midnightblue;
	color:black;
		 
	 }
	 #l{color:white;}
	 #main
	 {   background-color:powderblue;
		 
		 border-top: 1px outset chocolate;
		 padding:4px;
		 box-shadow:3px 1.5px 3px 1.2px grey;	 }
	.error
	{
		color:#731516;
	}
	#head1{
	text-align: center;
	color:midnightblue}
    </style>
</head>
<body style="background-color:white">
<h1 id="head1">ampleSAMPLES</h1>




<main>
<div class="container" id="cont1">
<h2 id="l">Fill the Details:</h2>
   <form method="post" action="success.php">
    
    <div class="form-group">
		<label for="name" class="control-label" id="l">Your Name:</label>
		<input class="form-control" placeholder="Enter your full name" type="text" id="name"  name="admin_name" required/>
		</div>
		<div class="form-group">
		<label for="email" class="control-label" id="l">Email Address</label>
		<input type="text" placeholder="Enter your email address" class="form-control" id="email" name="admin_email" required/>
		</div>
		<div class="form-group">
		<label for="quiz_desc" class="control-label" id="l">Quiz Description</label>
		<input class="form-control" placeholder="Describe your quiz" type="textarea" id="quizdet" name="quizdet" required/>
		</div>

		<div class="form-group">
		<label for="date" class="control-label" id="l">Quiz Date</label>
		<input class="form-control" placeholder="dd/mm/yyyy" type="date" id="date" name="conduct_date" required/>
		<br></div>
        <div class="form-group">
		<label for="date" class="control-label" id="l">Time of Conduct</label>
		<input class="form-control" placeholder="hh:mm" type="time" id="time" name="conduct_time" required/>
		<br></div>
        <br/>
		<h3 id="l">Keep time limit for the whole quiz:</h3>
		<label class="checkbox-inline">
		<input type="checkbox" name="check1" id="check1" onClick="show('block2',this)" value="quiztime" id="l"/>
			<br>
		</label>
		<h3 id="l">Keep time limit for each question</h3>
		<label class="checkbox-inline">
		<input type="checkbox" name="check2" id="check2" onClick="show('block1',this)" value="questime"/>
		</label><br>
		<br>
		<br>
		
		<div id="block2">
		<label id="l">Time limit for test:</label>
		<input type="text" placeholder="Enter time(hh:mm)"  id="time1" name="time1" ><br>
		</div >
		<div id="block1" >
		<label id="l">Time limit for easy question:</label>
		<input type="text" placeholder="Enter time(hh:mm)"  id="time2" name="time2" ><br>
		<label id="l">
		Time limit for tough question:</label>
		<input type="text" placeholder="Enter time(hh:mm)"  id=" time3" name="time3"><br>
		</div>
		<div class="form-group">
		<label for="no_question" class="control-label" id="l">No. of Questions:</label>
		<input  placeholder="Enter Number of questions you want!" type="text" id="noques" name="noques" required/>
		<br>
		</div>
		
		<input type="submit" value="submit" name="submit"/>
		</form>
</div>
</main>
<script>
function show (it, box) {
  var vis = (box.checked) ? "block" : "none";
  document.getElementById(it).style.display = vis;
}

</script>



</div>
<hr>
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>
</body>
</html>