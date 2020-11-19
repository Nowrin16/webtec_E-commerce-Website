<?php
include('../control/RegValidation.php');

/*if(isset($_SESSION['pname'])||isset($_SESSION['brand'])||isset($_SESSION['price'])||isset($_SESSION['description'])||isset($_SESSION['pimage'])){
header("location: regResult.php");
}*/
?>
<!DOCTYPE html>
<html>
<body>
<fieldset style="width:90%">
<legend><h3>Publish New Product</h3></legend>
<br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data"> 
  <table style="width:100%">
  <tr>
     <td><lable>Seller ID</lable></td>
     <td><lable>:</lable>  <input type="text" name="sid" value="<?php echo @$_POST['sid'];?>" > </td> 
     
    </tr>
    <tr><td><hr style="width:500%"></td></tr>
    <tr>
     <td><lable>Product Name</lable></td>
     <td><lable>:</lable>  <input type="text" name="pname" value="<?php echo @$_POST['pname'];?>" > </td> 
     
    </tr>
    <tr><td><hr style="width:500%"></td></tr>
    <tr>
     <td><lable>Brand</lable></td>
     <td><lable>:</lable> <input type="text" name="brand" value="<?php echo @$_POST['brand'];?>" ></td>
    
    </tr>
    <tr><td><hr style="width:500%"></td></tr>
    <tr>
     <td><lable>Product Price</lable></td>
     <td><lable>:</lable> <input type="text" name="price" value="<?php echo @$_POST['price'];?>" ></td>
   
    </tr>
    <tr><td><hr style="width:500%"></td></tr>
    <tr>
     <td><lable>Product Description</lable></td>
     <td><lable>:</lable> <input type="text" size="70" name="description" value="<?php  echo @$_POST['description']; ?>" ></td>
    </tr>

  </table>

<hr>

<br><br>
Upload Image :<input type="file" name="pimage" id="pimage">
<br><br>
<input type="submit">
<input type="reset"> 
<br><br>
 

</form> 
<?php //echo $error; ?>
<a href="SellerHome.php">Back</a>

<h3>All Product: </h3>
<?php
   include('../control/DB/conn.php');
     $sqlget = "SELECT * FROM product";
     $sqldata = mysqli_query($con, $sqlget) or die('Error');

     echo "<table style='width:100%' border='1'>";
     echo "<tr> <th>Product ID</th> <th>Name</th> <th>Brand</th> <th>Price</th> <th>Description</th> </tr>";
     while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
           
      echo "<tr><td>";
      echo $row['pid'];
      echo "</td><td>";
      echo $row['pname'];
      echo "</td><td>";
      echo $row['brand'];
      echo "</td><td>";
      echo $row['price'];
      echo "</td><td>";
      echo $row['descrip'];
      echo "</td></tr>";

     }
     echo "</table>";
 ?>
</body>
</html>
</body>
</html>