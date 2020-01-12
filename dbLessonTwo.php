<?php
//Establish a connection to MySQL Database Server
$conn=mysqli_connect("localhost","root","");
//Check whether the connection in $conn is okay
if (!$conn){
    die("Connection Error : " .mysqli_connect_error());
}
//Otherwise if the connection is okay, create the database
$sql="create database emobilisdb";
//Execute the SQL query in $sql to create the database if it doesn't exist, or
//display an error message if the database exists.
if ($conn->query($sql)==true){
    print "Database created successfully.";
}
else{
    print "Database cannot be created because it exists";
}
//Closing the database connection
mysqli_close($conn);