<?php include('DB/conn.php');
session_start(); 


$pname = $brand = $price = $description = $sid = $pimage = "";
$pnameError = $brandError = $priceError = $desError= $sidError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $pname = test_input($_POST["pname"]);
  $brand = test_input($_POST["brand"]);
  $description = test_input($_POST["description"]);
  $price = test_input($_POST["price"]);
  $sid = test_input($_POST["sid"]);
 
  if(empty($pname)||(!preg_match("/^[a-zA-z ]*$/",$pname))){
      echo "Please Enter All the Information!!  ";
       }
  elseif(empty($brand)){
    echo "Please Enter The Brand Name!!  ";
      }
  elseif(empty($price)||(!preg_match("/^[0-9 ]*$/",$price))){
    echo "Please Enter The Product Price!!  ";
   }

  elseif(empty($description)){
    echo "Please Enter Product Description!!  ";
    }

    elseif(empty($sid)){
      echo "Please Enter Seller ID!!  ";
      }

else {
  
    $qry="Insert into product (pname,brand,price,descrip,sid) values('$pname','$brand','$price','$description','$sid')";
    $row = mysqli_query($con,$qry);
    if($row){
        echo "Record inserted succesfully!!";
    }
}

$target_dir = "files/";
$target_file =$target_dir . basename($_FILES["pimage"]["name"]);
if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file)) {
  echo "The file" . basename($_FILES["pimage"]["name"]) . "has been uploaded.";
} else {
  echo "Error no file uploaded";
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>