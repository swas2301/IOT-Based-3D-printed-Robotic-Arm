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
$output = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (isset($_POST['open'])){
		
			// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
			  printf("Unable to connect to the database:<br /> %s", $mysqli->error);
			  exit();
		  }
		  else{
					// Create the query $result = 
					$query = "UPDATE node_info SET output_data = 'on' WHERE device_id='doorlock'";

					// Send the query to MySQL

					$mysqli->query($query);

					if ($mysqli->errno) {
						$output = $mysqli->error;
					}
					else{
						$output = "Value Updated";
					}
		  }
	}
	/*
	if (isset($_POST['close'])){
		
			// Connect to the database server     
		  $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		  if ($mysqli->errno) {
			  printf("Unable to connect to the database:<br /> %s", $mysqli->error);
			  exit();
		  }
		  else{
					// Create the query $result = 
					$query = "UPDATE node_info SET output_data = 'off' WHERE device_id='doorlock';";

					// Send the query to MySQL

					$mysqli->query($query);

					if ($mysqli->errno) {
						$output = $mysqli->error;
					}
					else{
						$output = "Value Updated";
					}
		  }
	}
	*/
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
			<td colspan="2" align="left" valign="top"><h3>Door Lock</h3></td>
		</tr>
		
		<tr>
			<td align="left" valign="top">Lock</td>
			<td align="left" valign="top"><input type="submit" name="open" value="On"></td>
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
