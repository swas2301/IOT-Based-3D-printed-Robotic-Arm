<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:index.php");
	exit;
}
else
{
    $username = $_SESSION['UserData']['Username'];
	if (!($username == "shopan222@gmail.com"))
	{
	    header("location:adminhome.php");
	    exit;
	}
}
?>

<html>

	<head>

		<title>IoT Server</title>

		<style>

		table, th, td {

			border: 1px solid black;

			border -collapse: collapse;

			}

			th, td {

				padding: 2px;
			}

		</style>

	</head>
	<body>

		<?php
		$date = date("h:i:sa - d/m/Y");
		$mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		
    	if ($mysqli->connect_errno) {
			printf("Unable to connect to the database:<br /> %s", $mysqli->connect_error);
         	exit();
		}
		else
		{
			
			// Create the query
			$query = 'SELECT * FROM users ORDER by id';
			// Send the query to MySQL
			$result = $mysqli->query($query, MYSQLI_STORE_RESULT);
			$count_total = $result->num_rows;

		}
		/*
		if (sqlErr!=0)
		{
			printf("Mysql error number generated: %d<br />", sqlErr);

		} else {
			// Create the query

			$query = 'SELECT * FROM student ORDER by id';

			// Send the query to MySQL

			$result = $mysqli->query($query, MYSQLI_STORE_RESULT);

		}
		*/
		?>
		
		
		
        <table style="width:100%">

			<tr>
				<td colspan="6" align="left" valign="top"><h3>User Report: </h3></td>
			</tr>
			<tr>

                <th> ID </th>
                <th> name </th>
				<th> password </th>
                <th> email </th>
                <th> admin </th>
				<th> gcm </th>
            </tr>
		<font size="2">
		
		
		
		<?php

		// Iterate through the result set
		if ($count_total>0){
			while(list($user_id, $user_name, $user_email, $user_password, $user_gcmid, $user_adminright) = $result->fetch_row())

				printf("<tr> <th><a href='/edituser.php/?user_id=%s'>%s</a></th> <th>%s</th> <th>%s</th> <th>%s</th> <th>%s</th> <th>%s</th> </tr>", $user_id,$user_id, $user_name, $user_password, $user_email, $user_adminright, $user_gcmid); //, $android_id
		}
		?>
		</font>
		</table>
		
		<p>Now:<?=$date;?></p>

	</body>

	<a href="adminhome.php">back</a>
</html>

