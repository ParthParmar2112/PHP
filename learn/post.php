<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">

    </form>
</body>
</html>

<?php
    $x=$_POST["x"];
    $y=$_POST["y"];
    $z=$_POST["z"];
    // absolute variable
    $total=null;
    // $total=abs($x);
    // $total=round($x);
    //$total=floor($x);
    //$total=ceil($x);
    //$total=pow($x,$y);
    //$total=sqrt($x);
    // $total=max($x,$y,$z);
    //$total=min($x,$y,$z);
    $total=pi();

    echo $total;
?>