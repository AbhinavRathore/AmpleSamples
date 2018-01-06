<?php 
session_start();
$_SESSION['section']="consultancy"; 
header("location:fill.php");	
?>