<?php
include('DB/DBconnection.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['userName']) || empty($_POST['password'])) {
$error = "Enter valid email or password!";
}
else
{
$userName=$_POST['userName'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$qresult = $connection->CheckUsers($conobj,"users",$userName,$password);
 if(mysqli_num_rows($qresult) > 0){

   while($row=mysqli_fetch_assoc($qresult)){
     if($row["usertype"] == "admin"){
       $_SESSION["userName"] = $userName;
       $_SESSION["password"] = $password;
       header('Location: AdminDashboard.php');
     }
     elseif($row["usertype"] == "seller"){
      $_SESSION["userName"] = $userName;
      $_SESSION["password"] = $password;
      header('Location: SellerHome.php');
     }
     elseif($row["usertype"] == "buyer"){
      $_SESSION["userName"] = $userName;
      $_SESSION["password"] = $password;
      header('Location: BuyerHome.php');
     }
     else{
      $_SESSION["userName"] = $userName;
      $_SESSION["password"] = $password;
      header('Location: DeliverymanHome.php');
     }
   }

 }
 else{
  $error = "Username or Password is invalid";
 }

/*$userQuery = $connection->CheckUsers($conobj,"users",$userName,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["userName"] = $userName;
$_SESSION["password"] = $password;
   }
 else {
$error = "Username or Password is invalid";
}*/



$connection->CloseCon($conobj);

}
}


?>
