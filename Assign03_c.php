<?php
    $str1 = 'The quick black fox jumps over the white dog.';
    if (strpos($str1,'over') !== false) {
        echo 'Present';
    }
    else{
        echo 'Not Present';
    }
?>