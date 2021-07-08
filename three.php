<?php

require 'dbconfig/config_three.php';
		@$Animal_ID = "";
		@$Limb_Trial = "";
		@$Swing_Over_Stride = "";
		@$Brake_Over_Stride = "";
		@$Propel_Over_Stride = "";
		@$Stance_Over_Stride = "";
		@$Brake_Over_Stance = "";
		@$Propel_Over_Stance = "";
		@$Stance_Over_Swing = "";
		
?>
<!DOCTYPE html>
<html>
<head>
<title>Animal Movement and Characteristics Three</title>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300">
<link rel="stylesheet" href="css/style_three.css">
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
<body style="background-color: #AED6F1">
	<div id="main-wrapper">
		<center><h2>Movement Ratio</h2></center>
		
		<div class="inner container">
			
			<?php
					if(isset($_POST['fetch_btn'])){
							//echo '<script type="text/javascript">alert("go button clicked")</script>';
					
							$Animal_ID = $_POST['Animal_ID'];
					
							if($Animal_ID == "")
							{
									echo '<script type="text/javascript">alert("Enter Animal_ID to get ratio details")</script>';
							}
							else
							{
									$query = "SELECT*FROM movementratio WHERE Animal_ID='$Animal_ID'";
									$query_run = mysqli_query($con, $query);
									if($query_run)
									{
											if(mysqli_num_rows($query_run)>0)
											{
													$row = mysqli_fetch_array($query_run, MYSQLI_BOTH);
													@$Animal_ID = $row['Animal_ID'];
													@$Limb_Trial = $row['Limb_Trial'];
													@$Swing_Over_Stride = $row['Swing_Over_Stride'];
													@$Brake_Over_Stride = $row['Brake_Over_Stride'];
													@$Propel_Over_Stride = $row['Propel_Over_Stride'];
													@$Stance_Over_Stride = $row['Stance_Over_Stride'];
													@$Brake_Over_Stance = $row['Brake_Over_Stance'];
													@$Propel_Over_Stance = $row['Propel_Over_Stance'];
													@$Stance_Over_Swing = $row['Stance_Over_Swing'];
								
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
		
				
				
			<form action="three.php" method="post">
			
				<label><b>Animal_ID</b>      </label><button id="btn_go" name="fetch_btn" type="submit">Go</button>
				<input type="varchar" placeholder="Enter Animal ID" name="Animal_ID" value="<?php echo @$_POST['Animal_ID']; ?>">
				<label><b>Limb_Trial</b></label>
				<input type="varchar" placeholder="Enter Limb/Trial#" name="Limb_Trial" value="<?php echo $Limb_Trial; ?>">
				<label><b>Swing_Over_Stride</b></label>
				<input type="number" placeholder="Enter Swing/Stride (%)" step="0.1" min="0.0" max="100.0" name="Swing_Over_Stride" value="<?php echo $Swing_Over_Stride; ?>">
				<label><b>Brake_Over_Stride</b></label>
				<input type="number" placeholder="Enter Brake/Stride (%)" step="0.1" min="0.0" max="100.0" name="Brake_Over_Stride" value="<?php echo $Brake_Over_Stride; ?>">
				<label><b>Propel_Over_Stride</b></label>
				<input type="number" placeholder="Enter Propel/Stride (%)" step="0.1" min="0.0" max="100.0" name="Propel_Over_Stride" value="<?php echo $Propel_Over_Stride; ?>">
				<label><b>Stance_Over_Stride</b></label>
				<input type="number" placeholder="Enter Stance/Stride (%)" step="0.1" min="0.0" max="100.0" name="Stance_Over_Stride" value="<?php echo $Stance_Over_Stride; ?>"> 
				<label><b>Brake_Over_Stance</b></label>
				<input type="number" placeholder="Enter Brake/Stance (%)" step="0.1" min="0.0" max="100.0" name="Brake_Over_Stance" value="<?php echo $Brake_Over_Stance; ?>"> 
				<label><b>Propel_Over_Stance</b></label>
				<input type="number" placeholder="Enter Propel/Stance (%)" step="0.1" min="0.0" max="100.0" name="Propel_Over_Stance" value="<?php echo $Propel_Over_Stance; ?>">
				<label><b>Stance_Over_Swing</b></label>
				<input type="number" placeholder="Enter Stance/Swing (%)" step="0.1" min="0.0" max="100.0" name="Stance_Over_Swing" value="<?php echo $Stance_Over_Swing; ?>">
				
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
					@$Swing_Over_Stride = $_POST['Swing_Over_Stride'];
					@$Brake_Over_Stride = $_POST['Brake_Over_Stride'];
					@$Propel_Over_Stride = $_POST['Propel_Over_Stride'];
					@$Stance_Over_Stride = $_POST['Stance_Over_Stride'];
					@$Brake_Over_Stance = $_POST['Brake_Over_Stance'];
					@$Propel_Over_Stance = $_POST['Propel_Over_Stance'];
					@$Stance_Over_Swing = $_POST['Stance_Over_Swing'];
					
					if($Animal_ID == "" || $Limb_Trial == "" || $Swing_Over_Stride == "" || $Brake_Over_Stride == "" || $Propel_Over_Stride == "" || $Stance_Over_Stride == "" || $Brake_Over_Stance == "" || $Propel_Over_Stance == "" || $Stance_Over_Swing == "")
					{
						echo '<script type="text/javascript">alert("Insert values in all fields")</script>';
					}
					else{
						$query = "insert into movementratio values('$Animal_ID', '$Limb_Trial', $Swing_Over_Stride, $Brake_Over_Stride, $Propel_Over_Stride, $Stance_Over_Stride, $Brake_Over_Stance, $Propel_Over_Stance, $Stance_Over_Swing)";
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
						if($_POST['Animal_ID'] == "" || $_POST['Limb_Trial'] == "" || $_POST['Swing_Over_Stride'] == "" || $_POST['Brake_Over_Stride'] == "" || $_POST['Propel_Over_Stride'] == "" || $_POST['Stance_Over_Stride'] == "" || $_POST['Brake_Over_Stance'] == "" || $_POST['Propel_Over_Stance'] == "" || $_POST['Stance_Over_Swing'] == "")
						{
								echo '<script type="text/javascript">alert("Enter data in all fields")</script>';
						}
						else
						{
								@$Animal_ID = $_POST['Animal_ID'];
								@$Limb_Trial = $_POST['Limb_Trial'];
								@$Swing_Over_Stride = $_POST['Swing_Over_Stride'];
								@$Brake_Over_Stride = $_POST['Brake_Over_Stride'];
								@$Propel_Over_Stride = $_POST['Propel_Over_Stride'];
								@$Stance_Over_Stride = $_POST['Stance_Over_Stride'];
								@$Brake_Over_Stance = $_POST['Brake_Over_Stance'];
								@$Propel_Over_Stance = $_POST['Propel_Over_Stance'];
								@$Stance_Over_Swing = $_POST['Stance_Over_Swing'];
								
								$query = "UPDATE movementratio
										SET Limb_Trial = '$Limb_Trial', Swing_Over_Stride = $Swing_Over_Stride, Brake_Over_Stride = $Brake_Over_Stride, Propel_Over_Stride = $Propel_Over_Stride, Stance_Over_Stride = $Stance_Over_Stride, Brake_Over_Stance = $Brake_Over_Stance, Propel_Over_Stance = $Propel_Over_Stance, Stance_Over_Swing = $Stance_Over_Swing
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
								$query = "delete from movementratio where Animal_ID='$Animal_ID'";
							
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
	<div style="height:auto; background-color:#2000BA;">
	<h4><center>© 2020 Purdue University | An equal access/equal opportunity university | Copyright Complaints | Maintained by Discovery Park</center></h4>
	</div>
</footer>
</html>