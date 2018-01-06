<style>
body
{
	background:radial-gradient(lightcyan,whitesmoke);
}
*
{
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	
}
tr
{
	text-align:center;
}
h3
{
	font-size:14px;
	text-shadow:2px 1.3px 1.6px whitesmoke;
}
th
{
	color:#062F6E;
	text-shadow:1px 1.2px 1.4px lightgrey;
}
.ele
{
	color:#470304;
	text-weight:600;
	text-shadow:1.5px 1.5px 2px red;
	letter-spacing:1.2px;
	word-spacing:7px;
}
</style>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<?php
include("dbconfig.php");

?>
<div class="text-center ele"><u><h3>UPCOMING CONTEST</h3></u></div>
<div class="container">
<table class="table table-bordered" cellspacing="10px" cellpadding="10px" border="1">

<h3> SOFTWARE</h3>
<tr><th>QUIZ DESCRIPTION</th>
<th>DATE OF CONDUCT</th>
<th>CONDUCT TIME</th>
<th>DURATION OF QUIZ</th>
</tr>
<?php
$q= "SELECT * FROM quiz_details WHERE section='software' ";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result))
{echo "<tr>";
echo "<td class='text-danger'>".$row["quiz_description"]."</td>";
echo "<td>".$row["conduct_date"]."</td>";
echo "<td>".$row["conduct_time"]."</td>";
echo "<td class='text-success'>".$row["duration"]."</td>";
echo "</tr>";
}
?>
</table></div>
<div class="container">
<table class="table table-bordered" cellspacing="10px" cellpadding="10px">

<h3> FINANCE</h3>
<tr><th>QUIZ DESCRIPTION</th>
<th>DATE OF CONDUCT</th>
<th>CONDUCT TIME</th>
<th>DURATION OF QUIZ</th>
</tr>
<?php
$q= "SELECT * FROM quiz_details WHERE section='finance' ";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result))
{echo "<tr>";
echo "<td class='text-danger'>".$row["quiz_description"]."</td>";
echo "<td>".$row["conduct_date"]."</td>";
echo "<td>".$row["conduct_time"]."</td>";
echo "<td class='text-success'>".$row["duration"]."</td>";
echo "</tr>";
}
?>
</table></div>
<div class="container">
<table class="table table-bordered" cellspacing="10px" cellpadding="10px">

<h3> CONSULTANCY</h3>
<tr><th>QUIZ DESCRIPTION</th>
<th>DATE OF CONDUCT</th>
<th>CONDUCT TIME</th>
<th>DURATION OF QUIZ</th>
</tr>
<?php
$q= "SELECT * FROM quiz_details WHERE section='consultancy' ";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result))
{echo "<tr>";
echo "<td class='text-danger'>".$row["quiz_description"]."</td>";
echo "<td>".$row["conduct_date"]."</td>";
echo "<td>".$row["conduct_time"]."</td>";
echo "<td class='text-success'>".$row["duration"]."</td>";
echo "</tr>";
}
?>
</table></div>
<div class="container">
<table class="table table-bordered" cellspacing="10px" cellpadding="10px">

<h3> CORE</h3>
<tr><th>QUIZ DESCRIPTION</th>
<th>DATE OF CONDUCT</th>
<th>CONDUCT TIME</th>
<th>DURATION OF QUIZ</th>
</tr>
<?php
$q= "SELECT * FROM quiz_details WHERE section='core' ";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result))
{echo "<tr>";
echo "<td class='text-danger'>".$row["quiz_description"]."</td>";
echo "<td>".$row["conduct_date"]."</td>";
echo "<td>".$row["conduct_time"]."</td>";
echo "<td>".$row["duration"]."</td>";
echo "</tr>";
}
?>
</table>
</div>