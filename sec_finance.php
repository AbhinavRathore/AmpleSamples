<?php 
session_start();
$_SESSION['section']="finance"; 
header("location:fill.php");	
?>