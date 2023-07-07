<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox_button.php" method="post">
        <!-- <label>checkbox_button</label><br> -->


        <!-- this is used as a normal form like ve made -->


        <!-- <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="burger" value="Burger">Burger<br>
        <input type="checkbox" name="tako" value="Tako">Tako<br>
        <input type="checkbox" name="nachos" value="Nachos">Nachos<br>
        <input type="submit" name="submit" ><br> -->

        <!-- for making it like an array we need to gave same name like food -->
        
         <input type="checkbox" name="food[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="food[]" value="Burger">Burger<br>
        <input type="checkbox" name="food[]" value="Tako">Tako<br>
        <input type="checkbox" name="food[]" value="Nachos">Nachos<br>
        <input type="submit" name="submit" ><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        // by using elseif then it don't shows multiple value
        // then we need to if statement for multiple value
        if(isset($_POST["pizza"])){
            echo"you like pizza<br>";
        }
        if(isset($_POST["burger"])){
            echo"you like burger<br>";
        }
        if(isset($_POST["tako"])){
            echo"you like tako<br>";
        }
        if(isset($_POST["nachos"])){
            echo"you like nachos<br>";
        }
        // we will using empty function for make an empty choice That You dont like any product of this

        if(empty($_POST["pizza"])){
            echo"you DON'T like pizza<br>";
        }
        if(empty($_POST["burger"])){
            echo"you DON'T like burger<br>";
        }
        if(empty($_POST["tako"])){
            echo"you DON'T like tako<br>";
        }
        if(empty($_POST["nachos"])){
            echo"you DON'T like nachos<br>";
        }
}
?>

<?php



?>