<?php  

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
    <h2>Welcome To Seller Home Page</h2>
    <h4>Seller Details:</h4>

     <h5> <?php echo "Loged Email: " . $_SESSION["userName"];?></h5> 
    
<?php
   include('../control/DB/conn.php');
     $sqlget = "SELECT * FROM users WHERE email='".$_SESSION["userName"]."' ";
     $sqldata = mysqli_query($con, $sqlget) or die('Error');
     while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
           echo "Seller ID   :    ". $row['id']."<br>";
           echo "Seller Name     :   ".     $row['firstname'] ."    ". $row['lastname']."<br>";
           echo "Phone Number : ". $row['phone']."<br>"."Address : ".$row['homeAddress']."<br>";

     }
 ?>
 <br>
 <a href="SellerProfile.php"> Update Profile </a>

 <br><br>

    <h4>My Options:</h4>
    <a href="AddProduct.php"> Add New Product </a>
     <br> <br>
    <a href="CheckOrder.php"> Check Order & Delivery </a>
     <br> <br>
    <h5>Do you want to <a href="Logout.php">Logout</a></h5>
    </body>
</html>