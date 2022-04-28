<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "c756b631", "er4Pho3i", "c756b631");
	/* check connection */ 
	if ($mysqli->connect_errno)
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
  }


  $eml = $_POST['email'];
  $user = $_POST['username'];
  $pass = $_POST['password'];

    
  $query = "INSERT INTO User (E_email, E_username, E_password) VALUES ('$eml', '$user', '$pass')";

	if($user == ""){
		echo "You did not put in a username.";
	}
	else if (mysqli_query($mysqli, $query)) {
		header('Location: accountCreated.html');	
	} 
	else {
		  echo "That username is already in the database.";
	}
$mysqli->close();	
		
?>
