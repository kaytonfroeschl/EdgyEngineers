<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "c756b631", "er4Pho3i", "c756b631");
	/* check connection */ 
	if ($mysqli->connect_errno)
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
  	}

	$select = mysqli_query($mysqli, "SELECT * FROM User WHERE E_username = '".$_POST['username']."'");
	if(mysqli_num_rows($select)) {
		session_start();
		$_SESSION["active"] = true;
		header('Location: EdgyEngineers.html');
		break;
	}
	else{
		header('Location: errLogin.html');
		break;
	}
	
	$mysqli->close();	
		
?>
