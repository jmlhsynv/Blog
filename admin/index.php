<?php
//including the database connection file
include_once("option/config.php");
include 'option/function.php';
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
$result1 = mysqli_query($mysqli, "SELECT * FROM blogs ORDER BY blog_id DESC");
?>
 
<html>
<head>    
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
 <?php check_session(); ?>
<body>
   
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Admin Page</a>
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
                    <a class="dropdown-item" href="pages/editimage1.php">Bloq Foto</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages/blogtxt.php">Bloq İnfo</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages/addblog1.php">Yeni Bloq</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hekayələr
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pages/editimage.php">Hekayələr foto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages/hekayetxt.php">Hekayələr məlumat</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages/addblog.php">Yeni hekayə</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Haqqımda
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pages/aboutimg.php">Haqqımda Foto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages/abouttxt.php">Haqqımda məlumat</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages/about.php">Haqqımda Text</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Əlaqə
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pages/contactimg.php">Əlaqə foto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages/contacttxt.php">Əlaqə məlumat</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="pages/messages.php" class="nav-link">Mesajlar</a>
            </li>
            </ul>
            <div class=" my-2 my-lg-0">
                <a href="logout.php" class="btn btn-danger my-2 my-sm-0">Çıxış</a>
            </div>
        </div>
</nav>


    <div class="col-12 float-left mt-4">
        <div class="col-6 float-left">
        <div class="container">
      
     
        <table class="table table-dark table-striped table-hover">
            <tr >
                <th width="80%"><h3>Hekayənin başlığı</h3></th>
                
                <th class=""><h3 class=""><i class="fa fa-cog ml-5"></i></h3></th>
            </tr>
            <?php 
            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
            while($res = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td width='80%'>".$res['title']."</td>";
                    
                echo "<td><div class='btn-group w-100'><a class='btn btn-success ' href=\"pages/edit.php?id=$res[id]\">Düzəlt</a>  <a class='btn btn-danger' href=\"pages/delete.php?id=$res[id]\" onClick=\"return confirm('Silməyə əminsinizmi?')\">Sil</a></div></td>";        
            }
            ?>

        </table>
        </div>
    </div>
    <div class="col-6 float-left">
        <div class="container">
      
     
        <table class="table table-dark table-striped table-hover">
            <tr >
                <th width="80%"><h3>Blogun başlığı</h3></th>
                
                <th class=""><h3 class=""><i class="fa fa-cog ml-5"></i></h3></th>
            </tr>
            <?php 
            while($res1 = mysqli_fetch_array($result1)) {         
                echo "<tr>";
                echo "<td width='80%'>".$res1['title']."</td>";
                    
                echo "<td><div class='btn-group w-100'><a class='btn btn-success ' href=\"pages/edit1.php?blog_id=$res1[blog_id]\">Düzəlt</a>  <a class='btn btn-danger' href=\"pages/delete1.php?blog_id=$res1[blog_id]\" onClick=\"return confirm('Silməyə əminsinizmi?')\">Sil</a></div></td>";        
            }
            ?>

        </table>
        </div>
    </div>
    </div>
</body>
</html>