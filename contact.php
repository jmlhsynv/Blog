<?php
include 'option/function.php';
include 'option/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TITLE - ƏLAQƏ</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">TITLE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" >
                    <li>
                        <a  style="color: black;" href="index.php">BLOQ</a>
                    </li>
                    <li>
                        <a style="color: black;" href="post.php">HEKAYƏLƏR</a>
                    </li>
                    <li>
                        <a  style="color: black;" href="about.php">HAQQINDA</a>
                    </li>
                    <li>
                        <a style="color: black;" href="contact.php">ƏLAQƏ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header"  style="background-image: url('<?php contact_image()?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading" style="color: black;">
                        <h1>ƏLAQƏ</h1>
                        <hr class="small">
                        <?php contacttxt() ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form method="post" action="">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" name="ad" placeholder="Ad Soyad" id="name" required data-validation-required-message="Ad Soyadı daxil edin!">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Adres</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Adres" id="email" required data-validation-required-message="E-mail daxil edin!">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Telefon</label>
                            <input type="tel" class="form-control" name="telefon" placeholder="Telefon" id="phone" required data-validation-required-message="Telefon nömrəsini daxil edin!">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mesaj</label>
                            <textarea rows="5" class="form-control" name="messages" placeholder="Mesaj" id="message" required data-validation-required-message="Mesajı daxil edin!"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default" name="submit">Göndər</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php
if(isset($_POST['submit'])) {    
    $ad = $_POST['ad'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $messages = $_POST['messages'];


    // checking empty fields
    if(empty($ad) || empty($email) ||empty($telefon) ||empty($messages)) {                
        if(empty($ad)) {
            echo "<h1><font color='red'>Ad Soyadı daxil edin!</font></h1><br/>";
        }
        
        if(empty($email)) {
            echo "<h1><font color='red'>E-mail daxil edin!</font></h1><br/>";
        }

        if(empty($telefon)) {
            echo "<h1><font color='red'>Telefon nömrəsini daxil edin!</font></h1><br/>";
        }

        if(empty($message)) {
            echo "<h1><font color='red'>Mesajı daxil edin!</font></h1><br/>";
        }
        
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>GERİ QAYIT</a>";
    } else { 
                    
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO messages(ad,email,telefon,messages) VALUES('$ad','$email','$telefon','$messages')");
        
        //display success message
        echo "<p class='text-center'><font color='green' class='text-center'>Məlumat uğurla göndərildi.</p>";
      
    }
}

?>
    <hr>

    <!-- Footer -->
    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <ul class="list-inline text-center">
                            <li>
                                <a href="http://twitter.com/Samed_shixi">
                                    <span class="fa-stack fa-lg">
                                            <i class="fab fa-twitter"></i>
                                        <!-- <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i> -->
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="http://facebook.com/samedshixi">
                                    <span class="fa-stack fa-lg">
                                            <i class="fab fa-facebook"></i>
                                        <!-- <i class="fa fa-circle fa-stack-2x"></i> -->
                                        <!-- <i class="fa fa-facebook fa-stack-1x fa-inverse"></i> -->
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="http://instagram.com/samad.shikhi">
                                    <span class="fa-stack fa-lg">
                                        <!-- <i class="fa fa-circle fa-stack-2x"></i> -->
                                        <i class="fab fa-instagram"></i>
                                        <!-- <i class="fa fa-github fa-stack-1x fa-inverse"></i> -->
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-muted">Copyright &copy; TITLE.COM 2019</p>
                    </div>
                </div>
            </div>
        </footer>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
    <script src="https://kit.fontawesome.com/6614881b7c.js"></script>

</body>

</html>
