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

<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<title> Edit Information </title>
<?php

$id = $_GET['user_id'];

if (!($id=="")){
	$name = $password = $email =$admin = $output = $id = $password =  $android_id =  "";
	$nameErr = $passwordErr = $emailErr = $adminErr = $android_idErr = $idErr = "";
	// Connect to the database server     
	$mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
	if ($mysqli->errno) {
		printf("Unable to connect to the database:<br /> %s", $mysqli->error);
		exit();
	}else{
		// Create the query

		$query = "SELECT * FROM users WHERE id=$id";

		// Send the query to MySQL

		$result = $mysqli->query($query);

		if ($result->num_rows > 0){
			$data = $result->fetch_object();
			
			$name = $data->user_name;
			$password = $data->user_password;
			$email = $data->user_email;
			$admin = $data->user_adminright;
			$android_id =  $data->user_gcmid;
		}
		else { $idErr = "Data not found for [ID: $id]";}
	}
}
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (isset($_POST['find'])){
		
		if (empty($_POST["email"])) {
			 $emailErr = "Email is required";
		} else {
			 $email = test_input($_POST["email"]);
			 // check if e-mail address is well-formed
			 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				 $emailErr = "Invalid email format";
			  }
		}
		
		if (!($email="")){
			// Connect to the database server     
			$mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
			if ($mysqli->errno) {
				printf("Unable to connect to the database:<br /> %s", $mysqli->error);
				exit();
			}else{
				// Create the query

				$query = "SELECT * FROM users WHERE user_email=$email";

				// Send the query to MySQL

				$result = $mysqli->query($query);

				if ($result->num_rows > 0){
					$data = $result->fetch_object();
					
					$name = $data->user_name;
					$password = $data->user_password;
					$email = $data->user_email;
					$admin = $data->user_adminright;
					$android_id =  $data->user_gcmid;
				}
				else { $idErr = "Data not found for [ID: $id]";}
			}
		}
	}
	
    if (isset($_POST['delete'])){
        if (empty($_POST["username"])) {
            $usernameErr = "Enter roll to find username information";
        } else {
            $username = test_input($_POST["username"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[0-9]*$/",$roll)) {
                $rollErr = "Only alphabet is allowed";
            }
        }
        
        // Connect to the database server     
       $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
        if ($mysqli->errno) {
            printf("Unable to connect to the database:<br /> %s", $mysqli->error);
                exit();
        }else{
             // Create the query

             $query = "DELETE FROM student WHERE id=$username";

             // Send the query to MySQL

             $results = $mysqli->query($query);


             if ($results){
                 $output = "Success! record delated";
             }
             else {
                 $output = 'Error:('.$mysqli->errno.')'.$mysqli->error;
             }
        }
    }
	
	if (isset($_POST['update'])){
		
		if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		} else {
			$name = test_input($_POST["name"]);
			// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed";
		 }

		if (empty($_POST["email"])) {
			 $emailErr = "Email is required";
		} else {
			 $email = test_input($_POST["email"]);
			 // check if e-mail address is well-formed
			 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				 $emailErr = "Invalid email format";
			  }
		}
		
		if (empty($_POST["android_id"])) {
			 $android_id = "";
		} else {
			 $android_id = test_input($_POST["android_id"]);
		}
		
		if (empty($_POST["password"])) {
			 $password = "";
		} else {
			 $password = test_input($_POST["password"]);
		}

		// Connect to the database server     
		$mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
		if ($mysqli->errno) {
			printf("Unable to connect to the database:<br /> %s", $mysqli->error);
			exit();
		} else {
			if ((strlen($name) != 0)&&(strlen($email) != 0)&&(strlen($password) != 0)&&(strlen($admin) != 0))
			{
				// Create the query $result = 
				$query = "UPDATE student SET name = '$name', password = '$password',  email = '$email', Admin = '$admin', android_id = '$android_id' WHERE id=$username;";

				// Send the query to MySQL

				$results = $mysqli->query($query);
				if ($results){
					 $output = "Success! record updated";
				}
				else {
					 $output = 'Error:('.$mysqli->errno.')'.$mysqli->error;
				}
				//$name = $dept = $year = $email = $mobile =  $address =$gender = "";
			  }
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

<h2>User admin of IOT WSN</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <br><br>
   Name: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   Password: <input type="text" name="password" value="<?php echo $password; ?>">
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <input type="submit" name="find" value="Find">
   <br><br>
   Android device id: <br><textarea name="android_id" rows="3" cols="40"><?php echo $android_id;?></textarea>
   <br><br>
   Admin:
   <input type="radio" name="admin" <?php if (isset($admin) && $admin=="true") echo "checked";?>  value="true">true
   <input type="radio" name="admin" <?php if (isset($admin) && $admin=="false") echo "checked";?>  value="false">false
   <span class="error">* <?php echo $adminErr;?></span>
   <br><br>
   
   <input type="submit" name="update" value="Update">
   <input type="submit" name="delete" value="delete">
</form>

<?php
echo "<h2>$output</h2>";
?>

</body>
<a href="/report.php">back</a>
</html>
