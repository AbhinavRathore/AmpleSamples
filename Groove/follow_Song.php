

  
<?php
$song_id=$_GET["mbid"];
$name=$_GET["name"];

include('dbconfig.php');
/*$user=$_SESSION["email"];

$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($r);
$uid=$row["uid"];*/
$uid=1;
$sql="INSERT INTO `liked_song` (`song_id`,`name`, `uid`) VALUES ('$song_id', '$name','$uid')";

mysqli_query($con,$sql);

echo mysqli_error($con);


	header("location:artist.php");

?> 