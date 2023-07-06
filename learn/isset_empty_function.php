
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_empty_function.php" method="post">
        <label>username</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>
 


<?php
//isset()=Returns TRUE variable is declared and not null
// $food="pizza";
// if(isset($food)){
//     echo "this variable is set";
// }
// else{
//     echo "this variable is NOt set";
// }



//empty()= Returns TRUE if a variable is nor declared, false,null,""
// $food=false;
// if(empty($food)){
//     echo "this variable is empty";
// }
// else{
//     echo "this variable is NOT empty";
// }


foreach($_POST as $key=>$value){
echo"{$key}={$value}<br>";
}



// practice assigntment

if(isset($_POST["login"])){

    $username= $_POST["username"];
    $password= $_POST["password"];

    if(empty($username)){
        echo"username is empty";
    }
    elseif(empty($password)){
        echo"passowrd is empty";
    }
    else{
        echo "Hello {$username}";
    }

}
// all last output is associative array 
//which is used for to fill form where all the information is required properly

?>