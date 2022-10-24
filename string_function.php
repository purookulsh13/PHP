<?php
    echo strlen("I am Software Developer"); 
    echo "<br>";
    
    echo strrev("I am Software Developer"); 
    echo "<br>";
    
    $str = "    PHP";   
    echo  ltrim($str);
    echo "<br>";
    
    $str1 = "PHP    ";
    echo rtrim($str1);  
    echo "<br>";

    echo strcoll($str, $str1);
    echo "<br>";

    echo strcmp($str,$str1);
    echo "<br>";

    echo strpos("My name is Puroo Kulshrestha","me");
    echo "<br>";

    echo strtolower("My Name is PUROO");
    echo "<br>";

    echo strtoUpper("My Name is PUROO");
    echo "<br>";
?>