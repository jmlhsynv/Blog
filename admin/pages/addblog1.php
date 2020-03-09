<?php include '../option/function.php'; 
yoxla_session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yeni Blog</title>
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
            <form action="add1.php" method="post" name="form1" class="" enctype="multipart/form-data"> 
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Blogun Başlığı" name="title">
                </div>
                <div class="form-group">
                    <input type="file" class="form-control " name="uploaded_file">
                </div>
                <div class="form-group">
                    <textarea name="article" placeholder="Blog" rows="20" style="width: 100%;" class="form-control"></textarea>
                </div>
               
                <input type="submit" name="Submit" value="Əlavə et!" class="btn btn-warning" style="width: 100%">


            </form>
        </div>
    </div>

<script>
      CKEDITOR.replace( 'article' );
</script>
</body>
</html>