<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="order.php" method="post">
    <label>quantity: </label><br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
  
  </form>
</body>
</html>
<?php
   $item="pizza";
   $price=2.99;
//    $quantity=5;
   $quantity=$_POST["quantity"];
   $total=null;
   $total=$quantity * $price;
echo "you have ordered {$quantity} x {$item}/s <br>";
echo"your total is: \${$total}";

?>
