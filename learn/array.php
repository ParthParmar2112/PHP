<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array.php" method="post">
    <input type="text" name="fruit">
    <input type="submit" name="submit " value="submit">

    </form>
    
</body>
</html> -->
<?php
    // array ="variable" whitch can hold more thab one value ar a time

    // $food1="apple";
    // $food2="litchie";
    // $food3="banana";
    // $food4="mango";
    // we are usiing this as array to work less

    $fruits=array("apple","litchie","banana","kiwi","mango");
    //$fruit[2]="cherry";
    // echo $fruit[0];
    //array_pop($fruits); //removes last element of array
    //array_shift($fruits); // remves the first element
    //$reversed_fruits=array_reverse($fruits);

    echo count($fruits);// counts array variable no.


    foreach($fruits as $fruit){
            echo $fruit. "<br>";

        }


?>