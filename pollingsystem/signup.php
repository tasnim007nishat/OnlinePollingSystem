<?php 
include "db.php";

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['dob']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['district']) && isset($_POST['username']) && isset($_POST['password'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$district = $_POST['district'];
	$username = $_POST['username'];
	$password = password_hash(($_POST['password']), PASSWORD_DEFAULT);  

	$checkEmail = $db->prepare("SELECT email FROM users WHERE email=?");
	$checkEmail->execute([$email]);
	if($checkEmail->rowCount()>0){
		echo json_encode(['status' => 'error', 'message' => 'This email has already taken.']);
	} else {
		$query = $db->prepare("INSERT INTO users (first_name, last_name,dob,email,phone,district,username,password) VALUES (?,?,?,?,?,?,?,?)");
		$query->execute([$fname,$lname,$dob,$email,$phone,$district,$username,$password]);
		if($query){
			$_SESSION['created'] = "Account has been created successfully";
			echo json_encode(['status' => 'success']);
		}
	}
}
?>