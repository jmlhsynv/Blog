<?php 
//including the database connection file
include("../option/config.php");
 
//getting id of the data from url
$blog_id = $_GET['blog_id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM blogs WHERE blog_id=$blog_id");
 
//redirecting to the display page (index.php in our case)
header("Location:../index.php");
?>