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
#block1,#block2
{
display:none;
}
.container
{
	margin:0 auto;
	overflow:hidden;
}
   #cont1{
   width:60%;
   background-color:midnightblue;}
  #head {
    text-align: center;
    color: #252158;
    text-shadow: 2px 1.4px 1.4px #715f5f;
    box-shadow: 2px 0.4px 2.9px #3b6767;
    padding: 5px;
	background-color:midnightblue;
	color:black;
		 
	 }
	 #l{color:white;}
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
	color:midnightblue}
    </style>
</head>
<body style="background-color:white">
<h1 id="head1">ampleSAMPLES</h1>




<main>
<div class="container" id="cont1">
<h2 id="l">ADD A QUESTION</h2>
   <form method="post" action="contentadd.php">
      
       <p>
       <label id="l">Question:
       </label>
       <input type="text" name="question_text"/>
       </p>
       <p>
       <label id="l">Alternative 1
       </label>
       <input type="text" name="choice1"/>
       </p>
       <p>
       <label id="l">Alternative 2
       </label>
       <input type="text" name="choice2"/>
       </p>
       <p>
       <label id="l">Alternative 3
       </label>
       <input type="text" name="choice3"/>
       </p>
       <p>
       <label id="l">Alternative 4
       </label>
       <input type="text" name="choice4"/>
       </p><p>
       <label id="l">Correct Alternative
       </label>
       <input type="number" name="correct_choice"/>
       </p>
    
        <select>
        <option value="Diffuculty Level">Difficulty Level
        </option><option value="Easy">Easy</option>
        <option value="Tough">Tough</option>
        </select>
        <br/>
      
        <br/>
         <div id="block1">
           <legend>(ENTER IN SECONDS)</legend>
         <label>FOR EASY ONE </label>
         <input type="number" name="easy"/>
         <br/>
         <label>FOR HARD ONE </label>
         <input type="number" name="hard"/>
         <br/>
          </div>
      <p>
	  <h4 id="l">WANT TO ADD A LINK TO THIS QUESTION</h4>
	   <input type="checkbox" name="link"  onClick="show('block2',this)"/>
	   <div id="block2">
            <label id="l">ADD LINK:
       </label>
       <input type="text" name="LIN" ID="LIN"/>
         <br/>
          </div> 
		  <br><br><br>
      <input type="submit" value="submit" name="submit"/>
      </p>
       
</form>
</div>
</main>
<script>
function show (it, box) {
  var vis = (box.checked) ? "block" : "none";
  document.getElementById(it).style.display = vis;
}

</script>

<footer>

</footer>





</div>
<hr>
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>
</body>
</html>