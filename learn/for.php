<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for.php" method="post">
        <label>enter a number to count to:</label><br>
        <input type="text" name="counter">
        <input type="submit" name="start">
    </form>
</body>
</html>
<?php
$counter=$_POST["counter"];

for($i=$counter;$i>0;$i--){
    echo $i."<br>" ;
}

?>