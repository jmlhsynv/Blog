<?php include 'option/function.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<div class="container">
		<div class="col-4 offset-4">
		<h1 class="text-center">Login Page</h1>
		<form method="post" action="">
		  <div class="form-group">
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username">
		  </div>
		  <div class="form-group">
		    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" name="password">
		  </div>
		  <button type="submit" style="width: 100%" class="btn btn-warning">Log In</button>
		</form>
		</div>
	</div>
<?php login(); ?>
</body>
</html>