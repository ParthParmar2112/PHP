<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_button.php" method="post">
        <label>Radio button</label><br>
        <input type="radio"name="credit_card" value="visa">visa<br>
        <input type="radio"name="credit_card" value="master_card">master_card<br>
        <input type="radio"name="credit_card" value="American">American<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html><?php
// Radio button 
//$credit_card=$_POST["credit_card"];
if(isset($_POST["confirm"])){

    $credit_card=null; // by defining this null it dont shows the warning.

    if(isset($_POST["credit_card"])){
        $credit_card=$_POST["credit_card"];
        // echo $credit_card;
     }//else{
    //     echo "please make a selection";
    // }

    //method-1
    // if($credit_card =="visa"){
    //     echo "you selected visa";
    // }
    // elseif($credit_card == "master_card"){
    //     echo "you selected master_card";
    // }
    // elseif($credit_card == "American"){
    //     echo "you selected American";
    // }
    // else{
    //     echo "please make an selection";
    // }




    // by using an switch case
        switch($credit_card){
            case"visa":
            echo "you selected visa";
            break;
            case"master_card":
            echo "you selected master_card";
            break;
            case"American":
            echo "you selected American";
            break;
            default:
                echo "plese make an selection";
                
        }

}

?>