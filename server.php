<?php 
$user_name="";
$user_email="";
$errors = array();
//connect to the database
$db=mysqli_connect('localhost','root','DatabasePassword@455','register');

//condition (if register button is clicked)
if(isset($_POST['register'])){
	$username=mysql_real_escape_string($_POST['username']);
	$email=mysql_real_escape_string($_POST['email']);
	$password=mysql_real_escape_string($_POST['pass']);
	$password_confirmation=mysql_real_escape_string($_POST['pass2']);

	//ensuring properly filled forms
	//encountering the errors and pushing it to the $errors array
	if (empty($username)) {
		array_push($errors, "username is required");
	}
	if (empty($email)) {
		array_push($errors, "email is required");
	}if (empty($password)) {
		array_push($errors, "Password is required");
	}if ($password != $password_confirmation) {
		array_push($errors, "Passwords doesn't match");
	}

	//save user to database if no errors found 
	if(count($errors)==0){
		$password_encrypted=md5($password);
		$for_sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password_encrypted')";
		mysqli_query($db,$for_sql);

	}

}

 ?>
