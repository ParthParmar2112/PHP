
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_array.php" method="post">
    <label>enter a country</label>
    <input type="text" name="country">
    <input type="submit" name="submit">
    </form>
</body>
</html><?php
    // associative array = an array made of key=> value pairs
    // countries => capitals
    // id => username
    // item => price
    // $capitals=array("india"=>"dilli",
    // "koria"=>"seoul",
    // "usa"=>"washington",
    // "japan"=>"kyoto"); // associative array describe by ( => ) this

    // echo $capitals["india"];
     
    // $capitals["india"]="New Dilli";  // used for to update the associative array name.
    // $capitals["china"]= "benjin"; // also adds new array value.
    // array_pop($capitals); // removes last array value.
    // array_shift($capitals);
    // $keys=array_keys($capitals); // it display only key values.
    //  $values=array_values($capitals);
    // $capitals=array_flip($capitals); // used for to change the value into key.
    //                                 // and also key into value.
    // $capitals=array_reverse($capitals);
    // echo count($capitals);
    //  foreach( $capitals as $key => $value){
    //         echo "{$key}= {$value}  <br>";
    //  }



    // practice assignment
    $capitals=array("india"=>"New Dilli",
    "koria"=>"seoul",
    "usa"=>"washington",
    "japan"=>"kyoto"); // associative array describe by ( => ) this
    
    //$capital =$_POST["country"];
    $capital=$capitals[$_POST["country"]];
    echo "The Capital Is {$capital}";

?>