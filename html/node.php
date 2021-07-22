<?php
	$device_id = $_GET['id'];
	error_log("Device ID: ".$device_id);
	$device_key 		= $_GET['key'];
	error_log("Key: ".$device_key );
	$device_input 	= $_GET['input'];
	error_log("Input: ".$device_input);
	$log_time 		= date("Y-m-d H:i:s"); //YYYY-MM-DD HH:MM:SS;
	error_log("Time: ".$log_time);
	
	$outputdata = "";
	
	if ((!empty($device_id ))&&(!empty($device_key)))
	{
		// Connect to the database server     
        $mysqli = new mysqli('localhost', 'root', '1234', 'uem');  
        if ($mysqli->errno) {
            error_log('Unable to connect to the database: '.$mysqli->error);
			
            exit();
        }else{
			 // Create the query
             $query = "SELECT * FROM node_info WHERE device_id='$device_id' and device_key='$device_key'";
             // Send the query to MySQL
             $results = $mysqli->query($query);

             if ($results->num_rows > 0){
				
				$nodeinfo = $results->fetch_object();
				$username = $nodeinfo->username;
				$nodename = $nodeinfo->name;
				$outputdata = $nodeinfo->output_data;
				
				error_log("auth ok ".$nodename);
				
				
				$query = "UPDATE node_info SET output_data = '$device_input' WHERE device_id='$device_id'";
				$results = $mysqli->query($query);
				if ($results) 
				{
					$output = "@Success! record saved";
					error_log($output);
				}
				else 
				{
					$output = '@Error:('.$mysqli->errno.')'.$mysqli->error;
					error_log($output);
				}
				
			 }
             else {
                $output = '@Error:('.$mysqli->errno.')'.$mysqli->error;
				error_log("auth error");
				error_log($output);
             }
		}
		error_log($outputdata);
		echo($outputdata);
	}
?>