<?php
$age=0 ;
// if($age>=18){
//     echo"you may enter this site<br>";
//     }
//     elseif($age==0){
//         echo"you were just born";
//     }
//     else{
//         echo"you need to be 18";
//     }


// boolean value
// $adult=false;
// if($adult==true){
//     echo"you may enter this site";
// }
// else{
//     echo"you must be to adult";
// }


$hour=50;
$rate=15;
$weekly=null;
if($hour<=0){
    $weekly=0;
}
elseif($hour<=40){
    $weekly=$hour * $rate;
}

else{
    $weekly=($rate*40)+ (($hour-40)* ($rate*1.5));
}
echo "your weekly income is \${$weekly}";


?>
