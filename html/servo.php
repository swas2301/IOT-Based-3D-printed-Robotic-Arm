<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<title> User IoT </title>

<?php

?>

<?php
// define variables and set to empty values
$servo1Err = $servo2Err = $servo3Err = $servo4Err = $servo5Err = "";
$servo1 =  $servo2 = $servo3 = $servo4 = $servo5 = $output = "";
$sequence = 'line1&#13;&#10;line2&#13;&#10;line3';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['step_1'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '90,40,30,90,85' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '85,30,150,90,00' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['step_2'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '90,60,75,40,85' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '106,30,85,90,00' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['step_3'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '33,60,75,40,85' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '103,75,80,90,00' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['step_4'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '33,140,75,40,85' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '103,75,80,90,90' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['step_5'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '33,140,75,40,40' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '103,75,80,60,90' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['step_6'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '33,60,75,40,40' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '103,60,90,60,00' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['step_7'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '130,60,75,40,40' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '85,30,150,60,00' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['step_8'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '130,140,75,40,40' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '65,85,165,60,00' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['step_9'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '130,140,75,40,85' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '65,85,165,90,00' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['step_10'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '130,60,75,40,85' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '65,50,150,90,00' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['step_11'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '130,60,75,40,85' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '85,50,150,90,00' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['step_12'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '130,60,75,40,85' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '85,30,90,90,00' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['init'])){
		// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
		  }
		  else{
				// Create the query $result = 
				//$query = "UPDATE node_info SET output_data = '130,60,75,40,85' WHERE device_id='arm_001';";
				$query = "UPDATE node_info SET output_data = '85,30,90,90,00' WHERE device_id='arm_001';";
				// Send the query to MySQL
				$mysqli->query($query);
				$output = "Value Updated";
		  }
	}
	if (isset($_POST['update'])){
	
		   if (empty($_POST["servo1"])) {
			 $servo1Err = "Servo data is required or 00";
		   } else {
			 $servo1 = test_input($_POST["servo1"]);
			 // check if name only contains letters and whitespace
			 if (!preg_match("/^[0-9]*$/",$servo1)) {
			   $servo1Err = "Only number allowed";
			   $servo1 = "";
			 }
		   }
		   
		   if (empty($_POST["servo2"])) {
			 $servo2Err = "Servo data is required or 00";
		   } else {
			 $servo2 = test_input($_POST["servo2"]);
			 // check if name only contains letters and whitespace
			 if (!preg_match("/^[0-9]*$/",$servo2)) {
			   $servo2Err = "Only number allowed";
			   $servo2 = "";
			 }
		   }
		   
		   if (empty($_POST["servo3"])) {
			 $servo3Err = "Servo data is required or 00";
		   } else {
			 $servo3 = test_input($_POST["servo3"]);
			 // check if name only contains letters and whitespace
			 if (!preg_match("/^[0-9]*$/",$servo3)) {
			   $servo3Err = "Only number allowed";
			   $servo3 = "";
			 }
		   }
		   
		   if (empty($_POST["servo4"])) {
			 $servo4Err = "Servo data is required or 00";
		   } else {
			 $servo4 = test_input($_POST["servo4"]);
			 // check if name only contains letters and whitespace
			 if (!preg_match("/^[0-9]*$/",$servo4)) {
			   $servo4Err = "Only number allowed";
			   $servo4 = "";
			 }
		   }
		   
		   if (empty($_POST["servo5"])) {
			 $servo5Err = "Servo data is required or 00";
		   } else {
			 $servo5 = test_input($_POST["servo5"]);
			 // check if name only contains letters and whitespace
			 if (!preg_match("/^[0-9]*$/",$servo5)) {
			   $servo5Err = "Only number allowed";
			   $servo5 = "";
			 }
		   }


		  // Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
			  printf("Unable to connect to the database:<br /> %s", $mysqli->error);
			  exit();
		  }
		  else{
			  //if ((strlen($name) != 0)&&(strlen($dept) != 0)&&((strlen($year) != 0)&&(strlen($email) != 0)&&(strlen($mobile) != 0)&&(strlen($address) != 0)&&(strlen($gender) != 0))
			  if ((strlen($servo1) != 0)&&(strlen($servo2) != 0)&&(strlen($servo3) != 0)&&(strlen($servo4) != 0)&&(strlen($servo5) != 0))
			  {
					// Create the query $result = 
					$query = "UPDATE node_info SET output_data = '$servo1,$servo2,$servo3,$servo4,$servo5' WHERE device_id='arm_001';";

					// Send the query to MySQL

					$mysqli->query($query);
					//while(list($roll, $name, $dept, $year, $email, $mobile, $address, $gender) = $result->fetch_row())

						  //printf("%s %s %s %s %s %s %s %s <br>", $roll, $name, $dept, $year, $email, $mobile, $address, $gender);
					$output = "Value Updated";
					//$servo1 =  $servo2 = $servo3 = $servo4 = $servo5 = "";
			  }
			  else
			  {
				  $output = "Data Empty !!!";
			  }
		  }
  
	}
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<table width="50%" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
		<tr>
			<td colspan="3" align="left" valign="top"><h3>Servo control</h3></td>
		</tr>
		
		<tr>
			<td align="left" valign="top">Servo 1</td>
			<td align="left" valign="top"><input type="text" name="servo1" value="<?php echo $servo1;?>"></td>
			<td align="left" valign="top"><span class="error">* <?php echo $servo1Err;?></span></td>
		</tr>
		
		<tr>
			<td align="left" valign="top">Servo 2</td>
			<td align="left" valign="top"><input type="text" name="servo2" value="<?php echo $servo2;?>"></td>
			<td align="left" valign="top"><span class="error">* <?php echo $servo2Err;?></span></td>
		</tr>
		
		<tr>
			<td align="left" valign="top">Servo 3</td>
			<td align="left" valign="top"><input type="text" name="servo3" value="<?php echo $servo3;?>"></td>
			<td align="left" valign="top"><span class="error">* <?php echo $servo3Err;?></span></td>
		</tr>
		
		<tr>
			<td align="left" valign="top">Servo 4</td>
			<td align="left" valign="top"><input type="text" name="servo4" value="<?php echo $servo4;?>"></td>
			<td align="left" valign="top"><span class="error">* <?php echo $servo4Err;?></span></td>
		</tr>
		
		<tr>
			<td align="left" valign="top">Servo 5</td>
			<td align="left" valign="top"><input type="text" name="servo5" value="<?php echo $servo5;?>"></td>
			<td align="left" valign="top"><span class="error">* <?php echo $servo5Err;?></span></td>
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td colspan="3" align="left" valign="top"><p><span class="error">* required field.</span></p></td>
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="update" value="Update">&nbsp;&nbsp;<input type="submit" name="init" value="Initialize"></td>
		</tr>
		
		<tr>
			<td colspan="3" align="left" valign="top">
				<input type="submit" name="step_1" value="Step 1">&nbsp;
				<input type="submit" name="step_2" value="Step 2">&nbsp;
				<input type="submit" name="step_3" value="Step 3">&nbsp;
				<input type="submit" name="step_4" value="Step 4">&nbsp;
				<input type="submit" name="step_5" value="Step 5">&nbsp;
				<input type="submit" name="step_6" value="Step 6">&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan="3" align="left" valign="top">
				<input type="submit" name="step_7" value="Step 7">&nbsp;
				<input type="submit" name="step_8" value="Step 8">&nbsp;
				<input type="submit" name="step_9" value="Step 9">&nbsp;
				<input type="submit" name="step_10" value="Step 10">&nbsp;
				<input type="submit" name="step_11" value="Step 11">&nbsp;
				<input type="submit" name="step_12" value="Step 12">&nbsp;
			</td>
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td><?php echo "$output"; ?></td>
		</tr>
		
		
		<tr>
			<td>&nbsp;</td>
			<td><a href="adminhome.php">back</a></td>
		</tr>
		
	</table>
</form>

</body>

</html>
