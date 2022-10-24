<?php
    declare(strict_types=1);
    function teacher(string $name){
        $index = 0;
        for(;$index<5;$index++){
            echo strrev($name)."<br>";
            $index++;
        }
        $index++;
    }

    teacher("PHP class");
?>