<?php
	$username = "";
	$email = "";
	$errors = array();
	
	//Connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'animalmovementandacharacteristics');
	
	//If the register button is clicked
	if(isset($_POST['register'])){
	$username = mysqli_real_escape_string($_POST['username']);
	$email = mysqli_real_escape_string($_POST['email']);
	$password_1 = mysqli_real_escape_string($_POST['password_1']);
	$password_2 = mysqli_real_escape_string($_POST['password_2']);
	
		//Ensure that form fields are filled out properly
		if(empty($username)){
			array_push($errors, "Username is required");
		}
		if(empty($email)){
			array_push($errors, "Email address is required");
		}
		if(empty($password_1)){
			array_push($errors, "Password is required");
		}
		if($password_1 != $password_2){
			array_push($errors, "Both passwords do not match");
		}
		
		// Save users to the database if there are no errors
		if (count($errors) == 0){
			$password = md5($password_1); //Encrypt password before storing in database
			$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
			mysqli_query($db, $sql);
		}
	}
?>
	
	