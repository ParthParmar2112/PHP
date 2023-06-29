
<?php
//logical operators = combine conditional statements
//if(condition1 && condition2)
// && =true if both condition are true
// || = true if at least one condition is true
// !=true if flase false if true



// $temp=31;
// if($temp>=0 && $temp<=30){
//     echo"todays temprature is $temp Celcious. ";
// }
// elseif($temp>=30 || $temp<=50){
//     echo"todaywether is true";
// }


// switch = replacement to using many elseif statements more efficient,
//          less code to write

$grade="F";
/*    if($grade == 'A' || $grade=='a'){
        echo"you are doing extream good";
    }
    elseif($grade == 'B'|| $grade=='b'){
        echo"you are doing very good";
    }
    elseif($grade == 'C' || $grade=='c'){
        echo"you are doing mid good";
    }
    elseif($grade == 'D' || $grade=='d'){
        echo"you are doing good";
    }
    elseif($grade == 'E'|| $grade=='e'){
        echo"you are got passing marks";
    }
    elseif($grade == 'F'|| $grade=='f'){
        echo"you are fail in exam";
    }
    elseif($grade == 'P'|| $grade=='p'){
        echo"you got passing marks in exam";
    }
    else{
        echo"you are not inputing walid grade";
    }
*/

// whole statement is replaced by the switch case
switch($grade){
    case "A":
    echo"you did well";
    break;
    case "B";
    echo"you did little well";
    break;
    case "F";
    echo"you are fail";
    break;
    default:
    echo "you are putting invalid text";
}

?>