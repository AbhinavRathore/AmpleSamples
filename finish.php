<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Finish</title>
<<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script> 
<style>
    #cont{background:skyblue;width:40%;margin-top:200px}
    </style>
</head>
<body >
<?php session_start();unset($_SESSION['section']);?>
	<div class="container" id="cont">
		<h2>Thanks for Submiting!!!!</h2><br>
		<a  class="btn btn-lg btn-info " href="categories.php">Home</a>
	</div>
</body>
</html>