 <!DOCTYPE html>
 <html>
 <head>
 	<title>Blind Code Injection</title>
 	<link rel="stylesheet" type="text/css" href="css/milligram.css">
	<link rel="stylesheet" type="text/css" href="css/milligram.min.css">
 </head>
 <body>
<div class="container">
 <?php include('menu.php'); ?>
<hr>
	<div class="row">
	 	<form action="code_exec.php" method="GET">
	 	 	<fieldset>
		 		<input type="text" name="input" placeholder="Code">
		 		<input type="submit" value="Execute !" class="button">
	 		</fieldset>
	 	</form>
	</div>
	<div class="row">
				<?php 
			if(isset($_GET['input'])){
			$input=$_GET['input'];
			eval("echo 'Hello ".$input." xD';");
			}
			 ?>
	</div>
 </div>
 </body>
 </html>