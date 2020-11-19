<?php include('../control/DB/DBconnection.php');
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
    <h2>Profile</h2>
    <h3>All Details:</h3>

<?php

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUsers($conobj,"users",$_SESSION["userName"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {
    //echo "<table><tr><th>ID</th><th>Name</th></tr>";
    while( $row = $result -> fetch_assoc() ) {
        echo "<br>".$row["firstname"]."<br>".$row["email"]."<br>".$row["address"]."<br>";
    }

} else {
    echo "0 results";
}

?>


<br> <br>
<h5>Do you want to <a href="Logout.php">Logout</a></h5>
    </body>
</html>