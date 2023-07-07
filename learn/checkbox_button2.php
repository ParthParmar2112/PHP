<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox_button2.php" method="post">
        <!-- for making it like an array we need to gave same name like food -->
        
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="Burger">Burger<br>
        <input type="checkbox" name="foods[]" value="Tako">Tako<br>
        <input type="checkbox" name="foods[]" value="Nachos">Nachos<br>
        <input type="submit" name="submit" ><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        
     $foods=$_POST["foods"];
     foreach($foods as $food){
        echo $food ."<br>";
     }  
}
?>

