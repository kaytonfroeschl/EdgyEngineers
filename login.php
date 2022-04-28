<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "c756b631", "er4Pho3i", "c756b631");
	/* check connection */ 
	if ($mysqli->connect_errno)
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
  	}

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$key = false; 
	
	$query = "SELECT * FROM User";

	if($result = mysqli_query($mysqli, $query)){
		while($row = $result->fetch_assoc()){
			if(($user == $row["E_username"]) && ($pass == $row["E_password"])){
				$key = true;
				header('Location: EdgyEngineers.html');
				break;
			}
		}
		header('Location: errLogin.html');
	}

	
	$mysqli->close();	
		
?>
