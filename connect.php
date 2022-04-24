
<?php
function OpenCon() 
{
 $dbhost = "localhost";
 $dbuser = "c756b631";
 $dbpass = "er4Pho3i";
 $db = "c756b631";
 $con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $con -> error);
  return $con;
} 

function CloseCon($con){
  $con->close();
}
?>