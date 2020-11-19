<?php
include('../control/LoginValidation.php');

/*if(isset($_SESSION['userName'])){
header("location: SellerHome.php");
}*/
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
    <fieldset style="width:20%">
<legend><h3>Login</h3></legend>
    <?php echo $error; ?>

      <form action="" method="post">
        <input type="text" placeholder="Email Address" id="userName" name="userName" > 
        <br> <br>
        <input type="password" placeholder="Password" id="password" name="password" > 
        <br> <br>
        <input type="submit" name = "submit" value="LOGIN">
      </form>
    </body>
</html>