<?php
include "db.php";
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
	<div class="container">
	<div class="row">
	<div class="col-md-12"> 
	<ul class="nav nav-tabs">
    <li class="nav-item">
    	<a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
  	<li class="nav-item">
    	<a class="nav-link" data-toggle="tab" href="#profile">Profile</a>
  	</li>
  	<li class="nav-item">
    	<a class="nav-link disabled" href="#">Disabled</a>
  	</li>
  	<li class="nav-item dropdown">
    	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    	<div class="dropdown-menu">
      		<a class="dropdown-item" href="#">Action</a>
      		<a class="dropdown-item" href="#">Another action</a>
      		<a class="dropdown-item" href="#">Something else here</a>
      		<div class="dropdown-divider"></div>
      		<a class="dropdown-item" href="#">Separated link</a>
    	</div>
  	</li>
	</ul>
	<div id="myTabContent" class="tab-content">
  		<div class="tab-pane fade show active" id="home">
    		<p></p>
  		</div>
  		<div class="tab-pane fade" id="profile">
    		<p></p>
  		</div>
  		<div class="tab-pane fade" id="dropdown1">
    		<p></p>
  		</div>
  		<div class="tab-pane fade" id="dropdown2">
    		<p></p>
  		</div>
	</div>
	</div>
	</div>
	</div>
	<script src="jquery.min.js"></script>
	<script src="app.js"></script>
</body>
</html>