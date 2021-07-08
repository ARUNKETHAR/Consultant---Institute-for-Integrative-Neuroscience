<?php
	session_start();
	require 'dbconfig/config_users.php';
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function preback(){window.history.forward()};
setTimeout("preback()",0);
window.onunload=function(){null};
</script>
<title>User Login System</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="background-color:#7f8c8d">

	<div id="main-wrapper">
		<center>
			<h2>User Login System</h2>
			<img src="imgs/rat.png" class="avatar"/>
		</center>
	
	
		<form class="myform" action="login.php" method="post">
			<label><b>Username:</b></label><br>
			<input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Type your password"/><br>
			<a href="http://localhost/Animal%20Movement%20and%20Characteristics/mainpage.php"><input name="login" type="submit" id="login_btn" value="Login"/><br></a>
			<a href="http://localhost/Animal%20Movement%20and%20Characteristics/register.php"><input type="button" id="register_btn" value="Register"/></a>
		</form>
		<?php
		if(isset($_POST['login']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = "select * from users WHERE username='$username' AND password='$password'";
			
			$query_run = mysqli_query($con, $query);
			if(mysqli_num_rows($query_run)>0)
			{
				//valid
				$_SESSION['username'] = $username;
				header('location:http://localhost/Animal%20Movement%20and%20Characteristics/mainpage.php');
			}
			else{
				//invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
		}
		?>
	</div>
</body>
</html>