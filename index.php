<!DOCTYPE html>
<html>
<head>

	<title> Password Generator </title>
	<meta charset 'utf-8'>
	<link rel="stylesheet" type="text/css" href="Style/Style 1.0.css">

	<?php require 'C:\xampp\htdocs\p2\logic\logic.php'; ?>


</head>

<body>
	<center><h2>Password Generator</h2>
	<img src= "images\password_strength.png">

	<br>
	<br>

	<div class = "passwordBox"><?php
		for($i = 0; $i < $numWords; $i++){
			echo $result[$i] . "-";
		}	

		if(isset($_POST['numYes'])){
			$r1 = rand(0, 9);
			echo $r1;
		}

		if(isset($_POST['symYes'])){
			$r2 = rand(0, 9);
			echo $symList[$r2];
		}
		?>
	</div>
	<br>
	<form method='POST' action ='index.php'>
	<div>
		<label for ='numWords'>How many words?</label>
		<input maxlength= 1 type = 'text' name='num' id='numWords' val ='9'> (Max 9)<br>
		
		<label for='numPassYes'> Add number to password </label>
		<input type='checkbox' name='numYes' val = '1'/> <br>

		<label for='symPassYes'> Add symbol to pass </label>
		<input type ='checkbox' name='symYes' val = '1'><br>

		<input type='submit' value='Submit'> <br>
	</div>
	</form>
	<br>
	<br>

	<div class = "info"><h4>About</h4>
			<p>
				Drawing on the inspiration of <a href = "http://xkcd.com/936/" XKCD> Password Strength </a>.  
				This form develop a new password that will be easier for humans to remember and harder for computers 
				to guess.  Take the password "tr0uble&22".  This is easier for the computer to guess than "trouble dracula
				spider cannon".  These four common words generate a password more difficult to guess than a bunch of
				letters, numbers, and symbols jumbled together.  Now go forth and generate a password you will never 
				forget.
				</p> 
	</div>

</body>
</html>