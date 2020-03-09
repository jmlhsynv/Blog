<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<?php
//including the database connection file
include_once("../option/config.php");
include '../option/function.php'; 
yoxla_session();
if(isset($_POST['Submit'])) {    
    $title = $_POST['title'];
    $article = $_POST['article'];

// upload image to uploads folder
    if(!empty($_FILES['uploaded_file']))
  {
    $path = "../../uploads/";
    $path = $path . time() . rand(11, 99) . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " Şəkil bazaya yükləndi!";
    } else{
        echo "Şəkilin yüklənməsində problem var!";
    }
    
  }



    // checking empty fields
    if(empty($title) || empty($article) ||empty($path)) {                
        if(empty($title)) {
            echo "<font color='red'>Blogun başlığı boşdur.</font><br/>";
        }
        
        if(empty($article)) {
            echo "<font color='red'>Blogun mətni boşdur.</font><br/>";
        }
        // insert uploaded file name to databse
          if(empty($_FILES['uploaded_file']))
          {
            echo "<font color='red'>Blogun şəkli boşdur.</font><br/>";
                
          }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>GERİ QAYIT</a>";
    } else { 
                    
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO blogs(title,article,imagename) VALUES('$title','$article','$path')");
        
        //display success message
        echo "<font color='green'>Məlumat uğurla yazıldı.";
        echo "<br/><a href='../index.php' class='btn btn-info'>Ana səhifə</a>";
    }
}
?>
</body>
</html>