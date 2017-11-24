<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="Register.css">
    
</head>

<body></body>    
    
</html>

<?php

$dbc = mysqli_connect("localhost","root","","register");

$Username = $_POST['Username'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Mail = $_POST['Email'];
$Birthday = $_POST['Birthday'];
$Password = $_POST['Password'];

$query = "INSERT INTO register
(Username,Firstname,Lastname,Email,Birthday,Password) VALUES('$Username','$Firstname','$Lastname','$Mail','$Birthday','$Password');";

mysqli_query($dbc, $query);

echo "Tack för din personliga data! Denna skall absolut inte sparas i en text fil på  min dator för personlig användning!"

?>