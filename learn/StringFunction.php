<?php
    $username =array("Parth","Is","Live");
    $phone= "+91 112-233-4455";
    //$username = strtolower($username); // for to mamke string lower case
    //$username = strtoupper($username);// for to mamke string upperr case
    //$username = trim($username); //used for to remove the white space from string
    //$username = str_pad($username,20,"😈"); // where 20 is size of string and "0" will string last remaining space
                                        // it will give output like this   ==> Parth Is Live0000000
    //$phone = str_replace("-","",$phone); // used for to replace the value from another value
    //$username=strrev($username); //for reverse string
    //$username=str_shuffle($username); // for mixing the words with other words
    //$equals=strcmp($username,"Parth Is Live"); // for comparing the words
    //$count=strlen($username);// counts the character
    //$index=strpos($username," "); // for detect the position of string
    //$firstname=substr($username,0,5); //for make 2 different string from 1 string
    //$firstname=substr($username,8); //for vut string form last char no
    
    //$fullname=explode(" ",$username); // used for tomake array from string
    // foreach($fullname as $name){
    //     echo $name ."<br>";
    // }; 
    $fullname=implode(" ",$username); // used for to make a string from array
        echo $fullname;
    

?>