<?php

require 'dbconfig/config_two.php';
		@$Animal_ID = "";
		@$Limb_Trial = "";
		@$PPP = "";
		@$Stride_Length = "";
		@$Stride_Frequency = "";
		@$Step_Angle = "";
		@$Step_Angle_Variability = "";
		@$SL_Variability = "";
		@$SW_Variability = "";
		@$Number_of_Steps = "";
		@$Stride_Length_CV = "";
		@$Swing_Duration_CV = "";
		@$Gait_Symmetry = "";
		@$Min_dAdT = "";
		@$Max_dAdT = "";
		@$Tau_Prop_Difference = "";
		@$Ataxia_Coefficient = "";
		
		
?>
<!DOCTYPE html>
<html>
<head>
<title>Animal Movement and Characteristics Two</title>
<link rel="stylesheet" href="css/style_two.css">
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
<body style="background-color: #F5B041">
	<div id="main-wrapper">
		<center><h2>Movement Characteristics</h2></center>
		
		<div class="inner container">
		
			<?php
					if(isset($_POST['fetch_btn'])){
							//echo '<script type="text/javascript">alert("go button clicked")</script>';
					
							$Animal_ID = $_POST['Animal_ID'];
					
							if($Animal_ID == "")
							{
									echo '<script type="text/javascript">alert("Enter Animal_ID to get details on movement characteristics")</script>';
							}
							else
							{
									$query = "SELECT*FROM movementcharacteristics WHERE Animal_ID='$Animal_ID'";
									$query_run = mysqli_query($con, $query);
									if($query_run)
									{
											if(mysqli_num_rows($query_run)>0)
											{
													$row = mysqli_fetch_array($query_run, MYSQLI_BOTH);
													@$Animal_ID = $row['Animal_ID'];
													@$Limb_Trial = $row['Limb_Trial'];
													@$PPP = $row['PPP'];
													@$Stride_Length = $row['Stride_Length'];
													@$Stride_Frequency = $row['Stride_Frequency'];
													@$Step_Angle = $row['Step_Angle'];
													@$Step_Angle_Variability = $row['Step_Angle_Variability'];
													@$SL_Variability = $row['SL_Variability'];
													@$SW_Variability = $row['SW_Variability'];
													@$Number_of_Steps = $row['Number_of_Steps'];
													@$Stride_Length_CV = $row['Stride_Length_CV'];
													@$Swing_Duration_CV = $row['Swing_Duration_CV'];
													@$Gait_Symmetry = $row['Gait_Symmetry'];
													@$Min_dAdT = $row['Min_dAdT'];
													@$Max_dAdT = $row['Max_dAdT'];
													@$Tau_Prop_Difference = $row['Tau_Prop_Difference'];
													@$Ataxia_Coefficient = $row['Ataxia_Coefficient'];
								
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
		
				
				
			<form action="two.php" method="post">
			
				<label><b>Animal_ID</b>      </label><button id="btn_go" name="fetch_btn" type="submit">Go</button>
				<input type="varchar" placeholder="Enter Animal ID" name="Animal_ID" value="<?php echo @$_POST['Animal_ID']; ?>">
				<label><b>Limb_Trial</b></label>
				<input type="varchar" placeholder="Enter Limb/Trial#" name="Limb_Trial" value="<?php echo $Limb_Trial; ?>">
				<label><b>PPP</b></label>
				<input type="number" placeholder="Enter Paw Placement Positioning (cm)" step="0.01" min="-10.00" max="10.00" name="PPP" value="<?php echo $PPP; ?>">
				<label><b>Stride_Length</b></label>
				<input type="number" placeholder="Enter Stride Length (cm)" step="0.1" min="0.0" max="10.0" name="Stride_Length" value="<?php echo $Stride_Length; ?>">
				<label><b>Stride_Frequency</b></label>
				<input type="number" placeholder="Enter Stride Frequency (steps/s)" step="0.01" min="0.00" max="50.00" name="Stride_Frequency" value="<?php echo $Stride_Frequency; ?>">
				<label><b>Step_Angle</b></label>
				<input type="number" placeholder="Enter Step Angle (deg)" step="0.1" min="0.0" max="100.0" name="Step_Angle" value="<?php echo $Step_Angle; ?>"> 
				<label><b>Step_Angle_Variability</b></label>
				<input type="number" placeholder="Enter Step Angle Variability (deg)" step="0.01" min="0.00" max="100.00" name="Step_Angle_Variability" value="<?php echo $Step_Angle_Variability; ?>"> 
				<label><b>SL_Variability</b></label>
				<input type="number" placeholder="Enter SL Variability (cm)" step="0.01" min="0.00" max="10.00" name="SL_Variability" value="<?php echo $SL_Variability; ?>">
				<label><b>SW_Variability</b></label>
				<input type="number" placeholder="Enter SW Variability (cm)" step="0.01" min="0.00" max="10.00" name="SW_Variability" value="<?php echo $SW_Variability; ?>">
				<label><b>Number_of_Steps</b></label>
				<input type="number" placeholder="Enter Number of Steps" step="0.1" min="0.0" max="200.0" name="Number_of_Steps" value="<?php echo $Number_of_Steps; ?>">
				<label><b>Stride_Length_CV</b></label>
				<input type="number" placeholder="Enter Stride Length CV (%)" step="0.01" min="0.00" max="200.00" name="Stride_Length_CV" value="<?php echo $Stride_Length_CV; ?>">
				<label><b>Swing_Duration_CV</b></label>
				<input type="number" placeholder="Enter Swing Duration CV (%)" step="0.01" min="0.00" max="200.00" name="Swing_Duration_CV" value="<?php echo $Swing_Duration_CV; ?>">
				<label><b>Gait_Symmetry</b></label>
				<input type="number" placeholder="Enter Gait Symmetry " step="0.01" min="0.00" max="10.00" name="Gait_Symmetry" value="<?php echo $Gait_Symmetry; ?>">
				<label><b>Min_dAdT</b></label>
				<input type="number" placeholder="Enter Min dA/dT (cm^2 / s)" step="0.01" min="-100.00" max="100.00" name="Min_dAdT" value="<?php echo $Min_dAdT; ?>">
				<label><b>Max_dAdT</b></label>
				<input type="number" placeholder="Enter Max dA/dT (cm^2 / s)" step="0.01" min="0.00" max="200.00" name="Max_dAdT" value="<?php echo $Max_dAdT; ?>">
				<label><b>Tau_Prop_Difference</b></label>
				<input type="number" placeholder="Enter Tau - Propulsion" step="0.0001" min="-10.0000" max="10.0000" name="Tau_Prop_Difference" value="<?php echo $Tau_Prop_Difference; ?>">
				<label><b>Ataxia_Coefficient</b></label>
				<input type="number" placeholder="Enter Ataxia_Coefficient" step="0.01" min="0.00" max="10.00" name="Ataxia_Coefficient" value="<?php echo $Ataxia_Coefficient; ?>">
				
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
					@$PPP = $_POST['PPP'];
					@$Stride_Length = $_POST['Stride_Length'];
					@$Stride_Frequency = $_POST['Stride_Frequency'];
					@$Step_Angle = empty($_POST['Step_Angle']);
					@$Step_Angle_Variability = empty($_POST['Step_Angle_Variability']);
					@$SL_Variability = empty($_POST['SL_Variability']);
					@$SW_Variability = $_POST['SW_Variability'];
					@$Number_of_Steps = $_POST['Number_of_Steps'];
					@$Stride_Length_CV = $_POST['Stride_Length_CV'];
					@$Swing_Duration_CV = $_POST['Swing_Duration_CV'];
					@$Gait_Symmetry = $_POST['Gait_Symmetry'];
					@$Min_dAdT = $_POST['Min_dAdT'];
					@$Max_dAdT = $_POST['Max_dAdT'];
					@$Tau_Prop_Difference = empty($_POST['Tau_Prop_Difference']);
					@$Ataxia_Coefficient = $_POST['Ataxia_Coefficient'];
																
					
					if($Animal_ID == "" || $Limb_Trial == "" || $PPP == "" || $Stride_Length == "" || $Stride_Frequency == "" || $SW_Variability == "" || $Number_of_Steps == "" || $Stride_Length_CV == "" || $Swing_Duration_CV == "" || $Gait_Symmetry == "" || $Min_dAdT == "" || $Max_dAdT == "" || $Ataxia_Coefficient == "")
					{
						echo '<script type="text/javascript">alert("Insert values in all fields")</script>';
					}
					else{
						$query = "insert into movementcharacteristics values('$Animal_ID', '$Limb_Trial', $PPP, $Stride_Length, $Stride_Frequency, $Step_Angle, $Step_Angle_Variability, $SL_Variability, $SW_Variability, $Number_of_Steps, $Stride_Length_CV, $Swing_Duration_CV, $Gait_Symmetry, $Min_dAdT, $Max_dAdT, $Tau_Prop_Difference, $Ataxia_Coefficient) values(NULL, $Step_Angle, $Step_Angle_Variability, $SL_Variability, $Tau_Prop_Difference)";
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
						if($Animal_ID == "" || $Limb_Trial == "" || $PPP == "" || $Stride_Length == "" || $Stride_Frequency == "" || $SW_Variability == "" || $Number_of_Steps == "" || $Stride_Length_CV == "" || $Swing_Duration_CV == "" || $Gait_Symmetry == "" || $Min_dAdT = "" || $Max_dAdT = "" || $Ataxia_Coefficient = "")
						{
								echo '<script type="text/javascript">alert("Enter data in all fields")</script>';
						}
						else
						{
								@$Animal_ID = $_POST['Animal_ID'];
								@$Limb_Trial = $_POST['Limb_Trial'];
								@$PPP = $_POST['PPP'];
								@$Stride_Length = $_POST['Stride_Length'];
								@$Stride_Frequency = $_POST['Stride_Frequency'];
								@$Step_Angle = empty($_POST['Step_Angle']);
								@$Step_Angle_Variability = empty($_POST['Step_Angle_Variability']);
								@$SL_Variability = empty($_POST['SL_Variability']);
								@$SW_Variability = $_POST['SW_Variability'];
								@$Number_of_Steps = $_POST['Number_of_Steps'];
								@$Stride_Length_CV = $_POST['Stride_Length_CV'];
								@$Swing_Duration_CV = $_POST['Swing_Duration_CV'];
								@$Gait_Symmetry = $_POST['Gait_Symmetry'];
								@$Min_dAdT = $_POST['Min_dAdT'];
								@$Max_dAdT = $_POST['Max_dAdT'];
								@$Tau_Prop_Difference = empty($_POST['Tau_Prop_Difference']);
								@$Ataxia_Coefficient = $_POST['Ataxia_Coefficient'];
								
								$query = "UPDATE movementcharacteristics
										SET Limb_Trial = '$Limb_Trial', PPP = $PPP, Stride_Length = $Stride_Length, Stride_Frequency = $Stride_Frequency, Step_Angle = $Step_Angle, Step_Angle_Variability = $Step_Angle_Variability, SL_Variability = $SL_Variability, SW_Variability = $SW_Variability, Number_of_Steps = $Number_of_Steps, Stride_Length_CV = $Stride_Length_CV, Swing_Duration_CV = $Swing_Duration_CV, Gait_Symmetry = $Gait_Symmetry, Min_dAdT = $Min_dAdT, Max_dAdT = $Max_dAdT, Tau_Prop_Difference = $Tau_Prop_Difference, Ataxia_Coefficient = $Ataxia_Coefficient
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
								$query = "delete from movementcharacteristics where Animal_ID='$Animal_ID'";
							
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
	<div style="height:auto; background-color:#D35400;">
	<h4><center>© 2020 Purdue University | An equal access/equal opportunity university | Copyright Complaints | Maintained by Discovery Park</center></h4>
	</div>
</footer>
</html>