<?php

require 'dbconfig/config_one.php';
		@$Animal_ID = "";
		@$Limb_Trial = "";
		@$SWINGsec = "";
		@$BRAKEsec = "";
		@$PROPELsec = "";
		@$STANCEsec = "";
		@$STRIDEsec = "";
		
?>
<!DOCTYPE html>
<html>
<head>
<title>Animal Movement and Characteristics One</title>
<link rel="stylesheet" href="css/style_one.css">
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
<body style="background-color: #DAF7A6">
	<div id="main-wrapper">
		<center><h2>Animal Movement Timings</h2></center>
		
		<div class="inner container">
			
			<?php
					if(isset($_POST['fetch_btn'])){
							//echo '<script type="text/javascript">alert("go button clicked")</script>';
					
							$Animal_ID = $_POST['Animal_ID'];
					
							if($Animal_ID == "")
							{
									echo '<script type="text/javascript">alert("Enter Animal_ID to get timing details")</script>';
							}
							else
							{
									$query = "SELECT*FROM animalmovementtimings WHERE Animal_ID='$Animal_ID'";
									$query_run = mysqli_query($con, $query);
									if($query_run)
									{
											if(mysqli_num_rows($query_run)>0)
											{
													$row = mysqli_fetch_array($query_run, MYSQLI_BOTH);
													@$Animal_ID = $row['Animal_ID'];
													@$Limb_Trial = $row['Limb_Trial'];
													@$SWINGsec = $row['SWINGsec'];
													@$BRAKEsec = $row['BRAKEsec'];
													@$PROPELsec = $row['PROPELsec'];
													@$STANCEsec = $row['STANCEsec'];
													@$STRIDEsec = $row['STRIDEsec'];
								
											}
											else{
													echo '<script type="text/javascript">alert("Invalid Animal_ID")</script>';
											}
									}
									else{
											echo '<script type="text/javascript">alert("Error in query")</script>';
									}
							
							}	
								
					}
			?>
		
				
				
			<form action="one.php" method="post">
			
				<label><b>Animal_ID</b>      </label><button id="btn_go" name="fetch_btn" type="submit">Go</button>
				<input type="varchar" placeholder="Enter Animal ID" name="Animal_ID" value="<?php echo @$_POST['Animal_ID']; ?>">
				<label><b>Limb_Trial</b></label>
				<input type="varchar" placeholder="Enter Limb/Trial#" name="Limb_Trial" value="<?php echo $Limb_Trial; ?>">
				<label><b>SWINGsec</b></label>
				<input type="number" placeholder="Enter Swing Time (sec)" step="0.001" min="0.000" max="10.000" name="SWINGsec" value="<?php echo $SWINGsec; ?>">
				<label><b>BRAKEsec</b></label>
				<input type="number" placeholder="Enter Brake Time (sec)" step="0.001" min="0.000" max="10.000" name="BRAKEsec" value="<?php echo $BRAKEsec; ?>">
				<label><b>PROPELsec</b></label>
				<input type="number" placeholder="Enter Propel Time (sec)" step="0.001" min="0.000" max="10.000" name="PROPELsec" value="<?php echo $PROPELsec; ?>">
				<label><b>STANCEsec</b></label>
				<input type="number" placeholder="Enter Stance Time (sec)" step="0.001" min="0.000" max="10.000" name="STANCEsec" value="<?php echo $STANCEsec; ?>"> 
				<label><b>STRIDEsec</b></label>
				<input type="number" placeholder="Enter Stride Time (sec)" step="0.001" min="0.000" max="10.000" name="STRIDEsec" value="<?php echo $STRIDEsec; ?>"> 
				
				<center>
					<button id="btn_insert" name="insert_btn" type="submit">Insert</button>
					<button id="btn_delete" name="delete_btn" type="delete">Delete</button>
					<button id="btn_update" name="update_btn" type="update">Update</button>
				</center>
			</form>
		
			<?php
			
				if(isset($_POST['insert_btn'])){
					//echo '<script type="text/javascript">alert("Insert Clicked")</script>';
					@$Animal_ID = $_POST['Animal_ID'];
					@$Limb_Trial = $_POST['Limb_Trial'];
					@$SWINGsec = $_POST['SWINGsec'];
					@$BRAKEsec = $_POST['BRAKEsec'];
					@$PROPELsec = $_POST['PROPELsec'];
					@$STANCEsec = $_POST['STANCEsec'];
					@$STRIDEsec = $_POST['STRIDEsec'];
					
					if($Animal_ID == "" || $Limb_Trial == "" || $SWINGsec == "" || $BRAKEsec == "" || $PROPELsec == "" || $STANCEsec == "" || $STRIDEsec == "")
					{
						echo '<script type="text/javascript">alert("Insert values in all fields")</script>';
					}
					else{
						$query = "insert into animalmovementtimings values('$Animal_ID', '$Limb_Trial', $SWINGsec, $BRAKEsec, $PROPELsec, $STANCEsec, $STRIDEsec)";
						$query_run = mysqli_query($con, $query);
						if($query_run)
						{
								echo '<script type="text/javascript">alert("Values are inserted successfully")</script>';
						}
						else{
							echo '<script type="text/javascript">alert("Values are NOT inserted")</script>';
						}
					}
				}
				else if(isset($_POST['update_btn']))
				{
						//echo '<script type="text/javascript">alert("Update Clicked")</script>';
						if($_POST['Animal_ID'] == "" || $_POST['Limb_Trial'] == "" || $_POST['SWINGsec'] == "" || $_POST['BRAKEsec'] == "" || $_POST['PROPELsec'] == "" || $_POST['STANCEsec'] == "" || $_POST['STRIDEsec'] == "")
						{
								echo '<script type="text/javascript">alert("Enter data in all fields")</script>';
						}
						else
						{
								@$Animal_ID = $_POST['Animal_ID'];
								@$Limb_Trial = $_POST['Limb_Trial'];
								@$SWINGsec = $_POST['SWINGsec'];
								@$BRAKEsec = $_POST['BRAKEsec'];
								@$PROPELsec = $_POST['PROPELsec'];
								@$STANCEsec = $_POST['STANCEsec'];
								@$STRIDEsec = $_POST['STRIDEsec'];
								
								$query = "UPDATE animalmovementtimings
										SET Limb_Trial = '$Limb_Trial', SWINGsec = $SWINGsec, BRAKEsec = $BRAKEsec, PROPELsec = $PROPELsec, STANCEsec = $STANCEsec, STRIDEsec = $STRIDEsec
										WHERE Animal_ID = '$Animal_ID'";
										
								
								$query_run = mysqli_query($con, $query);
										if($query_run)
										{
												echo '<script type="text/javascript">alert("Data Updated Successfully")</script>';
										}
										else{
												echo '<script type="text/javascript">alert("Error")</script>';
										}
						}
				}		
				else if(isset($_POST['delete_btn']))
				{
						//echo '<script type="text/javascript">alert("Delete Clicked")</script>';
						if($_POST['Animal_ID'] == "")
						{
								echo '<script type="text/javascript">alert("Enter Animal_ID to delete entry")</script>';
						}
						else
						{
								$Animal_ID = $_POST['Animal_ID'];
								$query = "delete from animalmovementtimings where Animal_ID='$Animal_ID'";
							
								$query_run = mysqli_query($con, $query);
								if($query_run)
								{
										echo '<script type="text/javascript">alert("Entry deleted")</script>';
								}
								else 
								{
										echo '<script type="text/javascript">alert("Error in query")</script>';
								}
						}
				
				}
				
			?>
		</div>
	
	</div>
	
</body>
<footer>
	<div style="height:auto; background-color:#BA0008;">
	<h4><center>© 2020 Purdue University | An equal access/equal opportunity university | Copyright Complaints | Maintained by Discovery Park</center></h4>
	</div>
</footer>
</html>