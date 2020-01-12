<?php
//Establish a connection to MySQL Database Server
$conn=mysqli_connect("localhost","root","","emobilisdb");
//Check whether the connection in $conn is okay
if (!$conn){
    die("Connection Error : " .mysqli_connect_error());
}
//Otherwise if the connection is okay, create the table persons
$sql="create table persons(
idPass_number varchar (255) not null,
primary key(idPass_number),
first_name varchar (255) not null,
middle_name varchar (255) not null,
last_name varchar (255) not null,
gender varchar (255) not null,
marital_status varchar (255) not null,
tel_number varchar (255) not null,
email varchar (255) not null,
dob date not null,
age int not null,
nok varchar (255) not null,
nok_tel varchar (255) not null,
nok_relationship varchar (255) not null
)";
//Execute the SQL query in $sql to create the database table if it doesn't exist, or
//display an error message if it exists.
if ($conn->query($sql)==true){
    print "Table Persons created successfully.";
}
else{
    print "Table Persons cannot be created because it exists";
}
//Closing the database connection
mysqli_close($conn);