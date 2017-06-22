<?php 
if(isset($_GET['input'])){
$input=$_GET['input'];
exec("ping ".$input);
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Blind Command Execution</title>
 	<link rel="stylesheet" type="text/css" href="css/milligram.css">
	<link rel="stylesheet" type="text/css" href="css/milligram.min.css">
 </head>
 <body>
 <div class="container">
 <?php include('menu.php'); ?>
<hr>
	<div class="row">
	 	<form action="cmd_exec.php" method="GET">
	 	 	<fieldset>
		 		<input type="text" name="input" placeholder="Host">
		 		<input type="submit" value="ping !" class="button">
	 		</fieldset>
	 	</form>
	</div>
 </div>
 </body>
 </html>