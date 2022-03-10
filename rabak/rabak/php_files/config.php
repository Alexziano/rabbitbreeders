<?php

// Create connection
$con=mysqli_connect("localhost","root","","rabak");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>