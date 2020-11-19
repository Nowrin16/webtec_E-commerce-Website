<?php
$servername ="localhost";
$username ="root";
$dbpass="";
$dbname="e_commerce";
$conn=new mysqli($servername , $username, $dbpass , $dbname );
//below is query string
if ($conn->connect_error){
die("Connection failed: ". $conn->connect_error);
}
$pname="Bed";
$brand="OTOB";
$price="40000 tk";
$description="Double Bed, wooded";
$pimage="";
$sql = "INSERT INTO product(pname,brand,price,descrip) VALUES ('$pname', '$brand','$price','$description')";
$res = $conn->query($sql);
if($res)
{
echo "inserted successfully successfully";
}
else
{
echo "error occurred";
}
$conn->close();
?>