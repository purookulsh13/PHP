<?php
    $var = fopen('puroo.txt','r+');
    while(!feof($var))
        echo fgets($var);
    fclose($var);
?>