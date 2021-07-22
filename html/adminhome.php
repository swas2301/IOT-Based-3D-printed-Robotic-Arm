<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:index.php");
	exit;
}
else
{
    $username = $_SESSION['UserData']['Username'];
	/*
	$username = $_SESSION['UserData']['Username'];
	if (!($username == "shopan222@gmail.com"))
	{
	    header("location:adminhome.php");
	    exit;
	}
	*/
}
?>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $password = "";
$name = $email = $output = $password = "";


 // Connect to the database server     
        $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
        if ($mysqli->errno) {
            printf("Unable to connect to the database:<br /> %s", $mysqli->error);
                exit();
        }else{
             // Create the query

             $query = "SELECT * FROM users WHERE user_email='$username'";
             //print($query);
             // Send the query to MySQL

             $result = $mysqli->query($query);

             if ($result->num_rows > 0){
                  $data = $result->fetch_object();
                  //$name = $data->name;
                  //print($name);
                 
                  $name = $data->user_name;
                 
                
                   $email = $data->user_email;
                 
                  $password = $data->user_password;
             }
             else { $usernameErr = "Data not found for [user: $username]";}
        }
?>

<html>
<head>
	<title>IoT Server</title>
</head>
<body>

	<table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
		<tr>
			<td colspan="2" align="left" valign="top"><h3>Home</h3></td>
		</tr>
		<tr>
			<td colspan="2" align="left" valign="top"><?php print("Hi ".$name." [user],"); ?></td>
		</tr>
		<tr>
			<td colspan="2" align="left" valign="top"><a href='report.php'>User report [only for admin]</a></td>
		</tr>
		<tr>
			<td colspan="2" align="left" valign="top"><a href='servo.php'>IoT Servo control</a></td>
		</tr>
		<tr>
			<td colspan="2" align="left" valign="top"><a href='lock.php'>IoT Door Lock</a></td>
		</tr>
		<tr>
			<td colspan="2" align="left" valign="top"><a href='logout.php'>Log out</a></td>
		</tr>
	</table>
	
</body>
</html>
