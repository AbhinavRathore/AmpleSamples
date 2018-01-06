<?php 
session_start();
$_SESSION['section']="core"; 
header("location:fill.php");	
?>