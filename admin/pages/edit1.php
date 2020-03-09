<?php
// including the database connection file
include_once("../option/config.php");
include '../option/function.php'; 
yoxla_session();


// upload image to uploads folder
    if(!empty($_FILES['uploaded_file']))
  {
    $path = "../../uploads/";
    $path = $path . time() . rand(11, 99) . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " fayl yükləndi!";
    } else{
        echo "Şəkil yüklənmədi!";
    }
    
  }


if(isset($_POST['update']))
{    
    $blog_id = $_POST['blog_id'];
    
    $title=$_POST['title'];
    $article=$_POST['article'];
       
    
    // checking empty fields
    if(empty($title) || empty($article) || empty($path)) {            
        if(empty($title)) {
            echo "<font color='red'>Blogun başlığı boşdur.</font><br/>";
        }
        
        if(empty($article)) {
            echo "<font color='red'>Blogun mətni boşdur.</font><br/>";
        }
        if(empty($_FILES['uploaded_file'])) {
            echo "<font color='red'>Blogun şəkli boşdur.</font><br/>";     
         }
        
               
    } else {    
        
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE blogs SET title='$title',article='$article',imagename='$path' WHERE blog_id=$blog_id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: ../index.php");
    }
}
?>
<?php
//getting blog_id from url
$blog_id = isset($_GET['blog_id']) ? $_GET['blog_id'] : (isset($_POST['blog_id']) ? $_POST['post'] : 0);
 // print "SELECT title, article FROM users WHERE blog_id=$blog_id";
//selecting data associated with this particular blog_id
$result = mysqli_query($mysqli, "SELECT title, article FROM blogs WHERE blog_id=$blog_id");

while($res = mysqli_fetch_assoc($result))
{
    $title = $res['title'];
    $article = $res['article'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "Hekayə | ".$title;; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
</head>
 
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php">Admin Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-md-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="editimage1.php">Bloq Foto</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="blogtxt.php">Bloq İnfo</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="addblog1.php">Yeni Bloq</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hekayələr
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="editimage.php">Hekayələr foto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="hekayetxt.php">Hekayələr məlumat</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="addblog.php">Yeni hekayə</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Haqqımda
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="aboutimg.php">Haqqımda Foto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="abouttxt.php">Haqqımda məlumat</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="about.php">Haqqımda Text</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Əlaqə
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="contactimg.php">Əlaqə foto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="contacttxt.php">Əlaqə məlumat</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="messages.php" class="nav-link">Mesajlar</a>
            </li>
            </ul>
            <div class=" my-2 my-lg-0">
                <a href="../logout.php" class="btn btn-danger my-2 my-sm-0">Çıxış</a>
            </div>
        </div>
</nav>
    <div class="col-12 float-left mt-4">
        <div class="container">
            <form name="form1" method="post" action="edit1.php?blog_id=<?$blog_id?>" enctype="multipart/form-data">
    
                <div class="form-group">
                            <input type="text" class="form-control"  value="<?php echo $title;?>" name="title" required>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control " name="uploaded_file" required>
                        </div>
                        <div class="form-group">
                            <textarea name="article"  style="width: 100%;" class="form-control" required><?php echo $article;?></textarea>
                        </div>
                        <input type="hidden" name="blog_id" value="<?php echo $_GET['blog_id'];?>">
                       
                        <input type="submit" name="update" value="Yenile!" class="btn btn-warning" style="width: 100%">
            </form>
        </div>
    </div>
    
<script>
      CKEDITOR.replace( 'article' );
</script>
</body>
</html>