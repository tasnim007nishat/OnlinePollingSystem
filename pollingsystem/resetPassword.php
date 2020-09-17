

<!DOCUMENT html>
<html lang="en">
<head>
	<meta charset="UFT-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta hhtp-equiv="X-UA-Compatible" content="ig=edge">
	<title>Sign Up</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>


<div class="container">
<div class="row">
<div class="col-md-5 mx-auto mt-5">
<div class="card">
	<div class="card-header">
		<h3>Signup User</h3>
	</div>
	<div class="card-body">
			<form>
				
				<div class="form-class">
					<input type="text" id="oldpassword" class="form-control district" placeholder="Old Password">
					<div class="invalid-feedback">Old Password is required</div>
				</div>

				<div class="form-class">
					<input type="text" id="newpassword" class="form-control username" placeholder="New Password">
					<div class="invalid-feedback">New Password is required</div>
				</div>

				<div class="form-class">
					<input type="password" id="rpassword" class="form-control password" placeholder="Re-Type Password">
					<div class="invalid-feedback">Re-Type Password is required</div>
				</div>
				<br>
				<div class="form-class">
					<button type="button" id="signup" class="btn btn-primary">Save Changes</button>
					<a class="btn btn-secondary" style="float:right;" href="login.php">Close</a>
				</div>
   			</form>	
	</div>
</div>
</div>
</div>
</div>	
<script src="jquery.min.js"></script>
<script src="app.js"></script> 
</body>
</html>

