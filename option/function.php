<?php 

function select_article(){

    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

	$sql = "SELECT * FROM users ";
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            ?><div class="col-12 float-left" style="margin-bottom: 10px; padding: 20px; cursor: pointer; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" onclick="window.location.href='detailed.php?id=<?=$id?>'">
            <div class="col-12 float-left"><h1 class="text-center"><?=$row['title'];?></h1></div>
          	<div class="col-12 float-left">
                <div class="col-10 float-left offset-1 mt-3 mb-3 ">
                    <img src="<?=substr($row['imagename'], 6);?>" width="100%">
                </div>
            </div>
			<div class="col-12 float-left"><?=$row['article'];?></div></div>
            <?php
        }
    } else {
        echo "<h1 class='text-center text-danger'>Saytımızda məlumat yoxdur.</h1>";
    }

    mysqli_close($mysqli);

}

function detailed_article(){

    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    
    $id=$_GET['id'];

    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
            ?><div class="col-12 float-left" >
            <div class="col-12 float-left"><h1 class="text-center"><?=$row['title'];?></h1></div>
            <div class="col-12 float-left">
                <div class="col-10 float-left offset-1 mt-3 mb-3 ">
                    <img src="<?=substr($row['imagename'], 6);?>" width="100%">
                </div>
            </div>
            <div class="col-12 float-left"><?=$row['article'];?></div></div>
            <?php
        }
    } else {
        echo "<h1 class='text-center text-danger'>Saytımızda məlumat yoxdur.</h1>";
    }

    mysqli_close($mysqli);

}

function select_image(){
    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql = "SELECT * FROM images WHERE id='1' ";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
        
    while($row = mysqli_fetch_assoc($result)) {
        
               echo substr($row['imagename'], 6);

        
    }
}


mysqli_close($mysqli);

}

function blog_article(){
    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';


    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

	$sql = "SELECT * FROM blogs ORDER BY blog_id desc";
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
            ?><div class="col-12 float-left" >
            <div class="col-12 float-left"><h1 class="text-center"><?=$row['title'];?></h1></div>
          	<div class="col-12 float-left">
                <div class="col-10 float-left offset-1 mt-3 mb-3 ">
                    <img src="<?=substr($row['imagename'], 6);?>" width="100%">
                </div>
            </div>
			<div class="col-12 float-left"><?=$row['article'];?></div></div>
            <?php
        }
    } else {
        echo "<h1 class='text-center text-danger'>Saytımızda məlumat yoxdur.</h1>";
    }

    mysqli_close($mysqli);
}



function blog_image(){
    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql = "SELECT * FROM images WHERE id='2' ";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
        
    while($row = mysqli_fetch_assoc($result)) {
        
               echo substr($row['imagename'], 6);

        
    }
}
}
function about_image(){
    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql = "SELECT * FROM images WHERE id='3' ";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
        
    while($row = mysqli_fetch_assoc($result)) {
        
               echo substr($row['imagename'], 6);

        
    }
}
}
function contact_image(){
    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql = "SELECT * FROM images WHERE id='4' ";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
        
    while($row = mysqli_fetch_assoc($result)) {
        
               echo substr($row['imagename'], 6);

        
    }
}
}
function blogtxt(){
    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql = "SELECT * FROM info WHERE id='1' ";
$result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
            
        while($row = mysqli_fetch_assoc($result)) {
            
                echo $row['infotext'];

            
        }
    }
}
function hekayetxt(){
    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql = "SELECT * FROM info WHERE id='2' ";
$result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
            
        while($row = mysqli_fetch_assoc($result)) {
            
                echo $row['infotext'];

            
        }
    }
}
function abouttxt(){
    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql = "SELECT * FROM info WHERE id='3' ";
$result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
            
        while($row = mysqli_fetch_assoc($result)) {
            
                echo $row['infotext'];

            
        }
    }
}
function about_article(){
    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql = "SELECT * FROM info WHERE id='5' ";
$result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
            
        while($row = mysqli_fetch_assoc($result)) {
            
                echo $row['infotext'];

            
        }
    }
}
function contacttxt(){
    $databaseHost = 'localhost';
    $databaseName = 'blog';
    $databaseUsername = 'root';
    $databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql = "SELECT * FROM info WHERE id='4' ";
$result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
            
        while($row = mysqli_fetch_assoc($result)) {
            
                echo $row['infotext'];

            
        }
    }
}

 ?>