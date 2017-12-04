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

$Query = "SELECT * FROM register where Username='$Username' AND Password='$Password';";

$Result = mysqli_query($dbc, $Query);

if($row = mysqli_fetch_array($Result)) {
    echo "Successfully logged in!";
}
   
   else {
       echo "Username and Password did'nt match existing account";
   }

?>