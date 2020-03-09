<?php
include_once("../option/config.php");
include '../option/function.php'; 
yoxla_session();
?>
<?php
$result = mysqli_query($mysqli, "SELECT * FROM messages ORDER BY id DESC"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mesajlar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
        <table class="table table-dark table-striped table-hover " width="100%">
            <tr >
                <th width="10%">AD</th>
                <th width="10%">Email</th>
                <th width="10%">Telefon</th>
                <th width="60%">Mesaj</th>
                <th width="10%"><h3 class="text-center"><center><i class="fa fa-cog ml-5"></i><center></h3></th>
            </tr>
            <div class="container">
            <?php 
            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
            while($res = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td width='10%'>".$res['ad']."</td>";
                echo "<td width='10%'>".$res['email']."</td>";
                echo "<td width='10%'>".$res['telefon']."</td>";
                echo "<td style = 'width:60%;'>".@$res['message']."</td>";
                echo "<td width='10%'>
                        <div class='btn-group ' align='center'>
                            <center>
                            <a class='btn btn-danger' href=\"sil.php?id=$res[id]\" onClick=\"return confirm('Silməyə əminsinizmi?')\">Sil</a>
                        </center>
                        </div>
                    </td>";   
                echo "</tr>";     
            }
            ?>
            </div>

        </table>
        </div>
    </div>


</body>
</html>