<?php
//Establish a connection to MySQL Database Server
$conn=mysqli_connect("localhost","root","");
//Check whether the connection in $conn is okay
if (!$conn){
    die("Connection Error : " .mysqli_connect_error());
}
//Otherwise if the connection is okay, display a success message in the browser
print "Connection Successful";
//Closing the database connection
mysqli_close($conn);