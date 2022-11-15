<?php
    $num = rand(10000000,99999999);
    echo $num;
    echo "<br>";
    $a = substr($num, 0, 4);
    $ten = 10;
    $last = substr($num,7,8);
    $i=1;
    while($i!=10){
        $mid = $ten*$i;
        $l = $last*$i;
        echo "$a-$mid+$l";
        echo "<br>";
        $i++;
        
    }
?>
    
