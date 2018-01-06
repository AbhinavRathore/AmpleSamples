<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/typed.js"></script>
	<style>
		
		#head1{background-color:white;
			   padding-bottom:10px;
			   outline-style:ridge;
		       outline-color:gray ;;
			   margin-top:10px;
			   width:90%;
			  margin-left:64px
			   }
		#logo{margin-top:10px;
		      margin-left:20px;
			  font-size:40px;
		      color:darkturquoise}	  
		#icon1,#icon2{float:right;
		              margin-top:12px;}
		#signup{float:right;
					margin-top:25px;
		margin-right:7px}
		#login{float:right;
		       margin-top:25px;
		       margin-right:7px}
		#input1,#input2{float:right;
		                margin-top:25px}
		#line1 h1,#line2 h1{font-family: times, Times New Roman, times-roman, serif;
	                        font-size:40px;
				            color:white }
		#line3 h1,#line4 h1{font-family: times, Times New Roman, times-roman, serif;
		                    font-size:60px;
		                    color:white	}
        
		#foot1 p,#foot2 p{font-family: times, Times New Roman, times-roman, serif;
		       color:black}
		#loader {
		position: absolute;
        left: 50%;
        top: 50%;
        z-index: 1;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid blue;
        border-bottom: 16px solid blue;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 1s linear infinite;
        animation: spin 1s linear infinite;
		background-color:white;
		}

		@keyframes spin {
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); 
		}	 }  
	</style>
</head>

<body style="background-image:url(wooden.jpg)" id="body" onload="myFunction()">
	<div id="loader"></div>
	<div id="myDiv" style="display:none;">
	<div class="row" id="head1">
		<div class="col-md-3" id="logo"><h1>ampleSAMPLES<p></h1></div>
		<a href="register.php" id="signup" class="btn btn-info">Sign Up</a>
		<i class="fa fa-facebook-square fa-3x btn " id="icon1" style="margin-right:10px;" aria-hidden="true"></i>
		<i class="fa fa-google-plus-square fa-3x btn " id="icon2" aria-hidden="true"></i> 
		<h1 style="float:right">|</h1>
		<form action="l_handler.php" method="post" >
		<div id="login">
		<input type="submit" class="btn btn-info" value="Login"  name="login"/>
		</div>
		<div class="col-md-2" id="input1">
		<input id="password" type="password" class="form-control" name="password" placeholder="Password"/>
		</div>
		<div class="col-md-2"  id="input2">
		<input id="email" type="text" class="form-control " name="email" placeholder="Username"/>
		</form>
		</form>
		</div>
		
	</div >
	<br>
	<div class="container" style="height:450px ;">
	<div class="col-md-10 col-md-offset-1" id="line1"><h1></h1></div>
	<div class="col-md-10 col-md-offset-1" id="line3"></div> 
    </div>
	
	<div class="col-md-12 "><hr></div>
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>
	</div>
	<script>
    document.addEventListener('DOMContentLoaded', function(){
      Typed.new('#line1', {
        strings: ["<h1>                             Recruitment Season Ahead?<br>Planning to get an Internship?</h1>"],
        typeSpeed: 20,
		showCursor: false
      });
    });
    </script> 
	<script>
    document.addEventListener('DOMContentLoaded', function(){
      Typed.new('#line3', {
        strings: ["<h1>                        WANNA TEST YOURSELF?<br>WANNA ORGANISE A TEST?<br>Yes!<br>Bingo!You are at the right place!</h1>"],
        typeSpeed: 50,
		showCursor: false
      });
    });
    </script> 
	<script>
    var myVar;

    function myFunction() {
    myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";}
    </script>
	
	
</body>
</html>