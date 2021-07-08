<!DOCTYPE html>
<html>
<head>
<title>Animal Movement and Characteristics Three</title>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300">
<link rel="stylesheet" href="css/docandanal.css">
<header>
<div class="container">
		<img src="imgs/rat.png" alt="logo" class="logo">
		<nav>
			<ul>
				<li><a href="http://localhost/Animal%20Movement%20and%20Characteristics/mainpage.php">Home</a></li>
				<li><a href="https://www.purdue.edu/discoverypark/institute-for-integrative-neuroscience/facilities/animal-behavior-core/index.php">About</a></li>
				<li><a href="http://localhost/Animal%20Movement%20and%20Characteristics/documentationandanalytics.php">Documentation and Analytics</a></li>
				<li><a href="http://localhost/Animal%20Movement%20and%20Characteristics/contactus.php">Contact Us</a></li>
				<li><a href="http://localhost/Animal%20Movement%20and%20Characteristics/login.php">Sign Out</a><?php
																													if(isset($_POST['signout']))
																													{
																														session_destroy();
																														header('location:http://localhost/Animal%20Movement%20and%20Characteristics/login.php');
																													}
																												?></li>
				
			</ul>
		</nav>
	</div>
</header>
</head>
<body>
	<h1><center>This page provides documentaion about how data is stored and organized. These documents help users gain a very good understanding about how to manage and operate this data system. It is recommended that new users should review the Query techniques and statistical analysis. Resources that were used for assistance when developing all features of this website are also shown.</center></h1>

	<h1><center>Website Instructions for Users<br><a href="Website-Instructions-for-Users.docx">Click Here</a></br></center></h1>

	<h1><center>Database Operations and Management Techniques<br><a href="Database-Operations-and-Management-Techniques.docx">Click Here</a></br></center></h1>
	
	<h1><center>Fore and Hind Descriptive Statistics<br><a href="Fore-and-Hind-Descriptive-Statistics.docx">Click Here</a></br></center></h1>
	
	<h1><center>Movement Timings Analysis<br><a href="Animal-Movement(seconds)-Statistical-Summary.docx">Click Here</a></br></center></h1>
	
	<h1><center>Movement Characteristics Analysis<br><a href="Movement-Characteristics-Statistical-Summary.docx">Click Here</a></br></center></h1>
	
	<h1><center>Movement Ratio Analysis<br><a href="Movement-Ratio-Statistical-Summary.docx">Click Here</a></br></center></h1>
	
	<h1><center>Reference: Simple Snippets<br><a href="https://simplesnippets.tech/">Click Here</a></br></center></h1>
	
	<h1><center>Reference: W3S Schools-CSS<br><a href="https://www.w3schools.com/css/">Click Here</a></br></center></h1>

	<h1><center>Reference: W3S Schools-SQL<br><a href="https://www.w3schools.com/sql/">Click Here</a></br></center></h1>
	
	<h1><center>Reference: W3S Schools-HTML<br><a href="https://www.w3schools.com/html/">Click Here></a></br></center></h1>
	
	

</body>
<footer>
	<div style="height:auto; background-color:#E71BC4;">
	<h4><center>© 2020 Purdue University | An equal access/equal opportunity university | Copyright Complaints | Maintained by Discovery Park</center></h4>
	</div>
</footer>
</html>