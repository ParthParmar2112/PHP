<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validateuserinput.php" method="post">USERNAME :-
        <input type="text" name="uname"><br>AGE:-
        <input type="text" name="age"><br>Email:-
        <input type="text" name="email"><br>
        <input type="submit" name="login"><br>

    </form>
</body>
</html>
<?php

    if(isset($_POST["login"])){
        //$uname= filter_input(INPUT_POST,"uname",FILTER_SANITIZE_SPECIAL_CHARS);
        //it will use for to filter the special character from input like <> !@#$%^&*
        //$age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
        //it will use for to filter the number from the input rest will delete automatically
        //$email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        //echo "hello your EMAIL is {$email}";

        $age=filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
        $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        // if(empty($age)){
        //     echo "the number was not valid";
        // }else{
        //     echo"you are {$age} old";
        // }
        if(empty($email)){
            echo "the email was not valid";
        }else{
            echo"you are {$email} is valiid";
        }
    }

?>