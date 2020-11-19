<!DOCTYPE html>
<html>
<body>

<h3>Order Details</h3>

<?php
   include('../control/DB/conn.php');
     $sqlget = "SELECT * FROM orders";
     $sqldata = mysqli_query($con, $sqlget) or die('Error');

     echo "<table style='width:100%' border='1'>";
     echo "<tr> <th>Order ID</th> <th>Product ID</th> <th>Buyer ID</th> <th>Seller ID</th> <th>Quantity</th> <th>Discount</th> <th>Total Price</th>  <th>Delivery Status</th>  </tr>";
     while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
           
      echo "<tr><td>";
      echo $row['oId'];
      echo "</td><td>";
      echo $row['pId'];
      echo "</td><td>";
      echo $row['bId'];
      echo "</td><td>";
      echo $row['sId'];
      echo "</td><td>";
      echo $row['quantity'];
      echo "</td><td>";
      echo $row['discount'];
      echo "</td><td>";
      echo $row['totalPrice'];
      echo "</td><td>";
      echo $row['status'];
      echo "</td></tr>";

     }
     echo "</table>";
 ?>
 <a href="SellerHome.php">Back</a>
 </body>
</html>
