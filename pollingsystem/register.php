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
					<input type="text" id="fname" class="form-control fname" placeholder="First Name">
					<div class="invalid-feedback">First name is required</div>
				</div>

				<div class="form-class">
					<input type="text" id="lname" class="form-control lname" placeholder="Last Name">
					<div class="invalid-feedback">Last name is required</div>
				</div>

				<div class="form-class">
					<input type="date" id="dob" class="form-control dob">
					<div class="invalid-feedback">Date of Birth is required</div>
				</div>

				<div class="form-class">
					<input type="email" id="email" class="form-control email" placeholder="Email">
					<div class="invalid-feedback emailError">Email is required</div>
				</div>

				<div class="form-class">
					<input type="text" id="phone" class="form-control phone" placeholder="Phone No.">
					<div class="invalid-feedback">Phone no. is required</div>
				</div>

				<div class="form-class">
					<input type="text" id="district" class="form-control district" placeholder="District">
					<div class="invalid-feedback">District is required</div>
				</div>

				<div class="form-class">
					<input type="text" id="username" class="form-control username" placeholder="Username">
					<div class="invalid-feedback">Username is required</div>
				</div>

				<div class="form-class">
					<input type="password" id="password" class="form-control password" placeholder="Password">
					<div class="invalid-feedback">Password is required</div>
				</div>
				<br>
				<div class="form-class">
					<button type="button" id="signup" class="btn btn-primary">Register &rarr;</button>
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

