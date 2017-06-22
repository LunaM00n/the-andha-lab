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
	 	<form action="xss.php" method="POST">
	 	 	<fieldset>
		 		<input type="text" name="title" placeholder="tilte">
			 	<input type="text" name="content" placeholder="content">
			 	<input type="text" name="author" placeholder="author">
			 	<input type="submit" class="button" value="Store !">
	 		</fieldset>
	 	</form>
	</div>

	<div class="row">
		<?php 

include('connect.php');

if(isset($_POST['title'])){
$title=$_POST['title'];
$content=$_POST['content'];
$author=$_POST['author'];

$sql = "INSERT INTO articles (title, content, author)
VALUES ('$title', '$content', '$author')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>
<br>
<a href="xss_panel.php" class="button">Retrive Stored Data</a>
	</div>
 </div>

 </body>
 </html>

