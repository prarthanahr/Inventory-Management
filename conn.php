<?php
$servername = "localhost";

$username = "username";

$password = "password";

$db = "dbname";

$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn){
	die("connection failed:" .mysqli_connect_error());
}

echo "connected succesfully";

?>