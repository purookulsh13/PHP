<?php
    $num=1234;
    $rev=0;
    while($num>1){
        $rem = $num%10;
        $rev= (int)$rev*10+$rem;
        // echo "Reverse : $rev";
        // printf("\n");
        $num= (int)$num/10;
    }
    echo "$rev";
?>