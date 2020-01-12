<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Success</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/logo.png" alt="Logo">
</div>
<hr>
<div class="heading">
    <h3 class="text-center">Delete Success</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","emobilisdb");
    if (!$conn){
        die("Connection Error : " . mysqli_connect_error());
    }
    //Remove SQL Injections
    $idPass=mysqli_real_escape_string($conn,$_POST['idPass']);

    //Use $sql variable to store the SQL delete statement for deleting
    //a record from the database table persons
    $sql="DELETE FROM `persons` WHERE idPass_number='$idPass'";
    //Execute the query in $sql above
    if ($conn->query($sql)==true){
        print "<p>Personal Details Deleted Successfully.</p>";
        print "<a href='persons.php' class='btn btn-warning'>New/Delete Personal Details</a>";
    }
    else{
        print "<p>Personal Details not deleted.</p>";
        print "<a href='persons.php' class='btn btn-danger'>Try Again.</a>";
    }
    //Close the connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>