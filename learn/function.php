<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="function.php" method="post">
        <input type="text" name="username" value="">


    </form>
</body>
</html> -->


<!-- <?php
    //function ==write some code ince, reuse when you need it type()
    //           after function name toinvoke
    //           ex. add() substract() multiply() divides()
function Happy_Birthday($firstname,$age){
    echo "happy Birtyday Dear {$firstname}!<br>";
    echo "happy Birtyday Dear {$firstname}!<br>";
    echo "happy Birtyday Dear {$firstname}!<br>";
    echo "{$firstname} you are {$age} old you need to die<br><br>";
    return;
}
    Happy_Birthday("Bob",20);  //this is used for to 1 time output
    Happy_Birthday("Raju",15);  //this is used for to 2 time output
?> -->



<!-- <?php
    function is_even($numb){
    
    //$result =$numb %2; // if numb is even then 1 else 0 will display
    //return $result;
    return $numb % 2; // we replace result by the numb modulo 2 to decrese 1 step.
                    // it gaves the same ans
}
    echo is_even(2);

?> -->

<?php
function hypotenuse(int $a,int $b){   // we can declare the type like int,string,flot,double,array 
        $c=sqrt($a**2+$b**2);
        return $c;
}
echo hypotenuse(5,4);
?>