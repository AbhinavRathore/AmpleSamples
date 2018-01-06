<head>
<script>
   window.location.href;

   <!--Get mbid and name of followed artist -->
</script>
</head>
<?php
$song_id=$_GET["mbid"];
$name=$_GET["name"];
$user=$_SESSION["email"];


$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($r);
$uid=$row["uid"];

//if song is already followed by user
//echo this song already followed;
$sql="INSERT INTO `liked_artist` (`artist_id`,`name`, `uid`) VALUES ('$song_id', '$name','$uid')";

mysqli_query($con,$sql);

echo mysqli_error($con);

?>