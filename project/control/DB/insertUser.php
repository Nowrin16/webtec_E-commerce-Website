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
$fname="Nowrin";
$lname="Muhaimin";
$phone="01712251726";
$password="123";
$gender="Female";
$type="seller";
$homeAddress="Basundhara,Dhaka";
$email = "nms@gmail.com";
$blood="A+";
$birth="2000-05-16";
$image="";
$sql = "INSERT INTO users(firstname,lastname,userPassword,phone,gender,homeAddress,email,blood,birthDate,usertype,imageName)
VALUES ('$fname', '$lname','$password','$phone','$gender','$homeAddress' ,'$email','$blood','$birth','$type','$image')";
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