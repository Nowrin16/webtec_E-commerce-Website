<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname="e_commerce";
$conn=new mysqli($servername , $username, $password , $dbname );
//below is query string
$qry = "CREATE TABLE product(
pid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
pname VARCHAR(30) NOT NULL,
brand VARCHAR(30) NOT NULL,
price VARCHAR(15),
descrip VARCHAR(15),
pimage varchar(50)
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