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
fieldset
{
margin:20px auto;
padding:2px;
}
legend
{
	display: block;
    width: 100%;
    padding: 0;
    margin-bottom: 25px;
    font-size: 22px;
    line-height: 37px;
    border: 0;
    border-top-color: midnightblue;
    border-bottom: 2px outset #150303;
   
	text-align: center;
    font-stretch: extra-expanded;
    color: white;
    text-shadow: 2px 1px 3px grey;
	}
	.btn-default
	{
		color: whitesmoke;
    background-color: midnightblue;
    border-color: #2d0d17;
    text-shadow: 0.2px 1.2px;
    letter-spacing: 1.2px;
	}
	
	label
	{
		color:#251818;
		font-size:15px;
	}
  #head {
    text-align: center;
    color: #252158;
    text-shadow: 2px 1.4px 1.4px #715f5f;
    box-shadow: 2px 0.4px 2.9px #3b6767;
    padding: 5px;
	background-color:midnightblue;
	color:white;
		 
	 }
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
	color:white}
    </style>
</head>
<body style="background-image:url(back.jpg)">
<h1 id="head1">ampleSAMPLES</h1>
<?php
$uerr =  $passerr = $cpasserr = $emlerr = $gerr = $ferr = " ";
$username = $email = $password = $cpassword = $gender = $fathname = " ";

function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["username"]))
	{
		$uerr= "Username is required";
	}
	else
	{
		$username = test_input($_POST["username"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $uerr = "Only letters and white space allowed"; 
    }
	}
	
	if(empty($_POST["password"]))
	{
		$passerr= "Password is required";
	}
	else
	{
		$password = test_input($_POST["password"]);
		if(strlen($password) <8 )
		{
			$passerr = "Password too short " ;
		}
	    if (!preg_match("#[0-9]+#", $password)) {
        $passerr = "Password must include at least one number!";
    }

    if (!preg_match("#[a-zA-Z]+#", $password)) {
        $passerr = "Password must include at least one letter!";
    }     	 
	
	}
	
	if(empty($_POST["fathname"]))
	{
		$ferr= "Personal details are required";
	}
	else
	{
		$fathname = test_input($_POST["fathname"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$fathname)) {
      $ferr = "Only letters and white space allowed"; 
    }
	}
	
	if(empty($_POST["email"]))
	{
		$emlerr= "Email-Id is required";
	}
	else
	{
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emlerr = "Invalid email format"; 
    }
	}
	
	if (empty($_POST["gender"])) {
    $gerr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

	if(empty($_POST["cpassword"]))
	{
		$cpasserr= "Re-enter your password";
	}
	else
	{
		$cpassword = test_input($_POST["cpassword"]);
		if(strcmp($password,$cpassword))
		{
			$cpasserr = "Password don't match" ;
		}
	}
	

}
?>
<div class="section-form">
<div class="container" >
<div class="row" >
<div class="col-md-2 col-sm-6"  style="margin-left:44px	">
</div>
<div class="col-md-7 col-sm-8">
<h3 id="head" class="animated shake">
SIGNUP</h3>
<fieldset id="main">
<br/>
<form method="post" class="form-vertical form-lg" id="regform" name="regform"  action=<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]); 
include("r_handler.php");
?>">


<div class="form-group">
<label for="username" class="control-label">FULL NAME</label>
<input class="form-control" placeholder="Enter your full name" type="text" id="username"  name="username" required/>
<span class="error"><?php echo $uerr; ?> </span>
</div>
<div class="form-group">
<label for="regno" class="control-label">Registration No.</label>
<input type="number" placeholder="Enter your registration no." class="form-control" id="regno" name="regno" required/>
</div>
<div class="form-group">
<label for="password" class="control-label">PASSWORD</label>
<input class="form-control" placeholder="Enter your password" type="password" id="password" name="password" required/>
<span class="error"><?php echo $passerr; ?> </span>
</div>

<div class="form-group">
<label for="cpassword" class="control-label">CONFIRM PASSWORD</label>
<input class="form-control" placeholder="Confirm your password" type="password" id="cpassword" name="cpassword" required/>
<span class="error"><?php echo $cpasserr; ?> </span>
</div>
<fieldset>
<legend> PERSONAL INFORMATION</legend>
<div class="form-group">
<label for="fathname" class="control-label">FATHER'S NAME</label>
<input class="form-control" placeholder="Enter your father's name" type="text" id="fathname" name="fathname" required/>
<span class="error"><?php echo $ferr; ?> </span>
</div>
<div class="form-group">
<label class="col-sm-4">GENDER</label>
<label class="radio-inline">
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"/>MALE

</label>
<label class="radio-inline">
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>value="female"/>FEMALE
</label>
<span class="error"><?php echo $gerr; ?> </span>
</div>



<div class="form-group">
<label for="contact" class="control-label">CONTACT</label>
<input class="form-control" placeholder="Enter your contact No." type="number" id="contact" name="contact" required/>
</div>

<div class="form-group">
<label for="mail" class="control-label">EMAIL</label>
<input class="form-control" placeholder="Enter your email" type="email" id="email" name="email" required/>
<span class="error"><?php echo $uerr; ?> </span>
</div>
</fieldset>
<br/>
<fieldset>
<legend>ACADEMIC DETAILS</legend>
<div class="form-group">
<label for="program" class="control-label">COURSE CURRICULUM</label>
<select name="program" id="program">
<option value="Program">Program</option>
<option value="B.TECH">B.TECH</option>
<option value="M.TECH">M.TECH</option>
<option value="PHD">PHD</option>
<option value="MCA">MCA</option>
<option value="MSc">MSc</option>
</select>
</label>
</div>

<div class="form-group">
<label for="year" class="control-label">YEAR</label>
<select name="year" id="year">
<option value="Year">Year</option>
<option value="1st year">1st year</option>
<option value="2nd year">2nd year</option>
<option value="3rd year">3rd year</option>
<option value="Final year">Final year</option>
</select>
</label>
</div>

<div class="form-group">
<label for="cpi" class="control-label">CPI(till now)</label>
<input type="float" id="cpi" name="cpi"/>
</label>
</div>
</fieldset>

<center><button type="submit" class="btn btn-default" id="submit-button" name="submit">REGISTER</button></center>
<br/>

</fieldset>
</form>
</div>
</div>
</div></div>
</body>
</html>