<?php
    $str1 = 'facebook';
    $str2 = 'faceboll';
    $str_pos = strspn($str2,$str1);
    echo "First difference between two strings at position ,$str_pos, $str1[$str_pos] vs $str2[$str_pos]";
    echo "<br><br>";
?>