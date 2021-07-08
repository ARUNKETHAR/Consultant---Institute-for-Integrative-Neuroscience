<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Institute for Integrative Neuroscience</title>
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300">
	<link rel="stylesheet" href="css/mainpage.css">
<body>
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
</body>
</head>

<body>
	<div id="main-wrapper">
	<h2>Institute for Integrative Neuroscience</h2>
	
	<center><h3>Welcome <?php echo $_SESSION['username'] ?></h3></center>
	<div class="col">
		<ul class="wrapper">
			<li class="header">Audit Animal Movement Timings Data</li>
			<li><strong>Animal ID</strong></li>
			<li><strong>Limb/Trial#</strong></li>
			<li><strong>Swing (sec)</strong></li>
			<li><strong>Brake (sec)</strong></li>
			<li><strong>Propel (sec)</strong></li>
			<li><strong>Stance (sec)</strong></li>
			<li><strong>Stride (sec)</strong></li>
			<li class="emph"><a href="http://localhost/Animal%20Movement%20and%20Characteristics/one.php" class="button">Audit Data</a></li>
			<li class="emph"><a href="http://localhost/phpmyadmin/tbl_import.php?db=animalmovementandcharacteristics&table=animalmovementtimings" class="button">Insert CSV File</a></li>
			<li class="emph"><a href="http://localhost/phpmyadmin/tbl_export.php?db=animalmovementandcharacteristics&table=animalmovementtimings&single_table=true" class="button">Export CSV File</a></li>
			<li class="emph"><a href="http://localhost/phpmyadmin/sql.php?db=animalmovementandcharacteristics&table=animalmovementtimings&pos=0" class="button">View Database</a></li>
		</ul>
	</div>
	
	<div class="col">
		<ul class="wrapper">
			<li class="header">Audit Animal Movement Characteristics Data</li>
			<li><strong>Animal ID</strong></li>
			<li><strong>Limb/Trial#</strong></li>
			<li><strong>Paw Placement Positioning (cm)</strong></li>
			<li><strong>Stride Length(cm)</strong></li>
			<li><strong>Stride Frequency (steps/sec)</strong></li>
			<li><strong>Step Angle (deg)</strong></li>
			<li><strong>Step Angle Variability (deg)</strong></li>
			<li><strong>SL Variability (cm)</strong></li>
			<li><strong>SW Variability (cm)</strong></li>
			<li><strong>Number of Steps</strong></li>
			<li><strong>Stride Length CV (%)</strong></li>
			<li><strong>Swing Duration CV (%)</strong></li>
			<li><strong>Gait Symmetry</strong></li>
			<li><strong>Min dA/dT (cm^2/sec)</strong></li>
			<li><strong>Max dA/dT(cm^2/sec)</strong></li>
			<li><strong>Tau-Propulsion</strong></li>
			<li><strong>Ataxia Coefficient</strong></li>
			<li class="emph"><a href="http://localhost/Animal%20Movement%20and%20Characteristics/two.php" class="button">Audit Data</a></li>
			<li class="emph"><a href="http://localhost/phpmyadmin/tbl_import.php?db=animalmovementandcharacteristics&table=movementcharacteristics" class="button">Insert CSV File</a></li>
			<li class="emph"><a href="http://localhost/phpmyadmin/tbl_export.php?db=animalmovementandcharacteristics&table=movementcharacteristics&single_table=true" class="button">Export CSV File</a></li>
			<li class="emph"><a href="http://localhost/phpmyadmin/sql.php?server=1&db=animalmovementandcharacteristics&table=movementcharacteristics&pos=0" class="button">View Database</a></li>
		</ul>
	</div>
	
	<div class="col">
		<ul class="wrapper">
			<li class="header">Audit Animal Movement Characteristics Data</li>
			<li><strong>Animal ID</strong></li>
			<li><strong>Limb/Trial#</strong></li>
			<li><strong>Swing/Stride (%)</strong></li>
			<li><strong>Brake/Stride (%)</strong></li>
			<li><strong>Propel/Stride (%)</strong></li>
			<li><strong>Stance/Stride (%)</strong></li>
			<li><strong>Brake/Stance (%)</strong></li>
			<li><strong>Propel/Stance (%)</strong></li>
			<li><strong>Stance/Swing (%)</strong></li>
			<li class="emph"><a href="http://localhost/Animal%20Movement%20and%20Characteristics/three.php" class="button">Audit Data</a></li>
			<li class="emph"><a href="http://localhost/phpmyadmin/tbl_import.php?db=animalmovementandcharacteristics&table=movementratio" class="button">Insert CSV File</a></li>
			<li class="emph"><a href="http://localhost/phpmyadmin/tbl_export.php?db=animalmovementandcharacteristics&table=movementratio&single_table=true" class="button">Export CSV File</a></li>
			<li class="emph"><a href="http://localhost/phpmyadmin/sql.php?server=1&db=animalmovementandcharacteristics&table=movementratio&pos=0" class="button">View Database</a></li>
		</ul>
	</div>
	
	
	</div>

</body>
</html>