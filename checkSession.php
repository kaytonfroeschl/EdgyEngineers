<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "c756b631", "er4Pho3i", "c756b631");
	/* check connection */ 
	if ($mysqli->connect_errno)
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
    }


    if(isset($_SESSION)){
        header('Location: cart.html');	
    }else{
        header('Location: deniedCart.html');	
      }

    $mysqli->close();				
?>
