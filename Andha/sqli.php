 <!DOCTYPE html>
 <html>
 <head>
 	<title>Blind SQL Injection</title>
 	<link rel="stylesheet" type="text/css" href="css/milligram.css">
	<link rel="stylesheet" type="text/css" href="css/milligram.min.css">
 	
 </head>
 <body>
 <div class="container">
 <?php include('menu.php'); ?>
<hr>
	<div class="row">
	 	<form action="sqli.php" method="GET">
	 	 	<fieldset>
		 		<input type="text" name="input" placeholder="1">
		 		<input type="submit" value="check exist?" class="button">
	 		</fieldset>
	 	</form>
	</div>
	<div class="row">
		<?php 
include('connect.php');

if(isset($_GET['input'])){
$input=$_GET['input'];


$sql = "SELECT * FROM lolsec WHERE id=$input";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "True";
    
} else {
    echo "False";
}
$conn->close();
}
error_reporting(0);

 ?>
	</div>
 </div>
 </body>
 </html>