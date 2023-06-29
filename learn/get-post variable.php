<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="get-post variable.php" method="post">
  <label>user name</label><br>
  <input type="text" name="username"><br>
  <label>password</label><br>
  <input type="password" name="password"><br>
  
  <input type="submit" value="login"><br>
  </form>
</body>
</html>
<?php
  // $_get & $_post variable
  /* special variables used to collect data from an HTML 
  form data is sent to the file in the acction attribute of <form>
  <form action="some_file.php"  method="get"

  
  */
  echo $_POST["username"] . "<br>";
  echo "{$_POST["password"]} <br>"; 

?>