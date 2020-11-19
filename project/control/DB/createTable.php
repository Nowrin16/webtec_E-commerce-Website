<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname="e_commerce";
$conn=new mysqli($servername , $username, $password , $dbname );
//below is query string
$qry = "CREATE TABLE users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
userPassword VARCHAR(15),
phone VARCHAR(15),
gender VARCHAR(10),
homeAddress VARCHAR(500),
email VARCHAR(50),
blood VARCHAR(5),
birthDate date,
usertype VARCHAR(50),
imageName varchar(50)
)";
$res = $conn->query($qry);
if($res)
{
echo "table created successfully";
}
else
{
echo "error occurred";
}
$conn->close();
?>