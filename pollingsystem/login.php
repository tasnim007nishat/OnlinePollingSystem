<?php
include "db.php";
/*
if(isset($_POST['signup'])){
	header("location: register.php");
}
*/
?>

<!DOCUMENT html>
<html lang="en">
<head>
	<meta charset="UFT-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta hhtp-equiv="X-UA-Compatible" content="ig=edge">
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body> 
	<div class="container" style="float:right">
	<div class="row">
	<div class="col-md-5 mx-auto mt-5"> 
	<?php
	if(isset($_SESSION['created'])): ?>
		<div class="alert alert-success">
		<?php echo $_SESSION['created']; ?>
	<?php endif; ?>
	<?php unset($_SESSION['created']); ?>
	<div class="card">
	<div class="card-header">
		<h3>Login</h3>
	</div>
	<div class="card-body">
	<form>
	<div class="form-class">
		<input type="text" id="username" class="form-control username" placeholder="Username">
	<div class="invalid-feedback usernameError">Username is required</div>
	</div>

	<div class="form-class">
		<input type="password" id="password" class="form-control password" placeholder="Password">
	<div class="invalid-feedback passwordError">Password is required</div>
	</div>
	<br>
	<div class="form-class">
		<button type="button" id="login" class="btn btn-primary">Login &rarr;</button>
		<a href="resetPassword.php" style="float:right;margin-top:10px;">Forgot password?</a>
		<hr>
		<a class="btn btn-info btn-lg btn-block" href="register.php">Create Account</a>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	<script src="jquery.min.js"></script>
	<script src="app.js"></script>
</body>
</html>