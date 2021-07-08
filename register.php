<?php
	require 'dbconfig/config_users.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>User Registration System</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="background-color:#7f8c8d">

	<div id="main-wrapper">
		<center>
			<h2>User Registration System</h2>
			<img src="imgs/rat.png" class="avatar"/>
		</center>
	
	
		<form class="myform" action="register.php" method="post">
			<label><b>Username:</b></label><br>
			<input name="username" type="text" class="inputvalues" placeholder="Create your username" required/><br>
			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Create your password" required/><br>
			<label><b>Confirm Password:</b></label><br>
			<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm your password" required/><br>
			<input name="submit_btn" type="submit" id="create-account_btn" value="Create Account"/><br>
			<a href="http://localhost/Animal%20Movement%20and%20Characteristics/login.php"><input name="back" type="button" id="back_btn" value="Go back to login page"/></a>
		</form>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Create Account button is clicked") </script>';
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				
				if($password == $cpassword)
				{
					$query = "select * from users WHERE username='$username'";
					$query_run = mysqli_query($con, $query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						//There is already a user with the same username
						echo '<script type="text/javascript"> alert("Username already exists - Please try another username") </script>';
					}
					else{
						$query = "insert into users values('$username', '$password')";
						$query_run = mysqli_query($con, $query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User is registered. Please go to login page to login.") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
					}
				}
				else{
					echo '<script type="text/javascript"> alert("Both passwords do not match") </script>';
				}
			}
		?>
	</div>
</body>
</html>