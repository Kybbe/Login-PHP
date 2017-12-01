<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="Register.css">
    
</head>

<body></body>    
    
</html>

<?php

$dbc = mysqli_connect("localhost","root","","register");

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$query = "SELECT * FROM register
(Username,Password) VALUES('$Username','$Password');";

?>