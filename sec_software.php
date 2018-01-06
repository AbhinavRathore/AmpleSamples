<?php 
session_start();
$_SESSION['section']="software"; 
header("location:fill.php");	
?>