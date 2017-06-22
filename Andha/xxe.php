<?php
if(isset($_GET['input'])){
$xml=$_GET['input'];
$data=simplexml_load_string($xml);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="css/milligram.css">
	<link rel="stylesheet" type="text/css" href="css/milligram.min.css">
</head>
<body>
<div class="container">
 <?php include('menu.php'); ?>
<hr>
	<div class="row">
	 	<form action="xxe.php" method="GET">
	 	 	<fieldset>
		 		<input type="text" name="input" placeholder="<test>LOL</test>">
		 		<input type="submit" value="Parse !" class="button">
	 		</fieldset>
	 	</form>
	</div>
 </div>
</body>
</html>