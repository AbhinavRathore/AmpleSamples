<style>
ul li{
	color:black;
}
ul#adjust li
{
	
}
</style>
<?php
//$user=$_SESSION["email"];

include("dbconfig.php");

/*$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$u);
$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
$uid=$row["uid"];

//echo $name;
*/
$uid=1;
$sql="SELECT * FROM `liked_song` WHERE `uid`='$uid' ";

$t=mysqli_query($con,$sql);

echo mysqli_error($con);
?>
<ul type="none" id="adjust">
	<?php
while($row=mysqli_fetch_array($t,MYSQLI_ASSOC))
{  
    echo "<li><img src='images/music.jpg' style='height:100px'>";
  echo $row["name"]."</li>";
  echo "<br/>";
}
?>
</ul>

