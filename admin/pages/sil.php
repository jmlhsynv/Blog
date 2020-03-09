<?php 
//including the database connection file
include("../option/config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM messages WHERE id=$id");
header('messages.php');

?>