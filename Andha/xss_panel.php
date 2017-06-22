
 <!DOCTYPE html>
 <html>
 <head>
 	<title>XSS stored data Retrieval</title>
 	<link rel="stylesheet" type="text/css" href="css/milligram.css">
	<link rel="stylesheet" type="text/css" href="css/milligram.min.css">
 </head>
 <body>
<div class="container">
 <?php include('menu.php'); ?>
<hr>
	

<div class="row">
	<div class="column">
<table>
    <thead>
	    <tr>
	      <th>Title</th>
	      <th>Content</th>
	      <th>Author</th>
	    </tr>
  	</thead>
  	<tbody>
  
      <?php 
include('connect.php');

if(isset($_POST['submit']))
{
	$sql = "DELETE from articles WHERE title='aa'";
	if ($conn->query($sql) === TRUE) {
	    echo "Deleted successfully";
	} 
}

$sql = "SELECT * FROM articles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo " <tr>
      <td>".$row['title']."</td>
      <td>".$row['content']."</td>
      <td>".$row['author']."</td>
       </tr>";
    }
} 
$conn->close();


 ?>
    
    </tbody>
</table>

 		</div>	
	</div>
</div>
 
 </form>
 </body>
 </html>