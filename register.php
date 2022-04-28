<?php
   include('config.php');
?>

<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h2>Registration Page</h2>
        <a href="index.php">Click here to go back</a><br/><br/>
        <form action="register.php" method="POST">
           Enter Username: <input type="text" 
           name="username" required="required" /> <br/>
           Enter password: <input type="password" 
           name="password" required="required" /> <br/>
           <input type="submit" value="Register"/>
        </form>
    </body>
</html>

<?php
$con = mysqli_connect("localhost","c756b631","er4Pho3i","c756b631");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Escape special characters, if any
//$username = mysqli_real_escape_string($con, $_POST['username']);
$Username = $_POST['username'];
$Password = $_POST['password'];
//$password = mysqli_real_escape_string($con, $_POST['password']);

print "Username " .$Username;
print "Password " .$Password;

//$sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES ('$firstname', '$lastname', '$age')";

/*if (!mysqli_query($con, $sql)) {
  printf("%d Row inserted.\n", mysqli_affected_rows($con));
}*/

mysqli_close($con);
?>