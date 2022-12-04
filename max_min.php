<?php

function max_arr($a)
{
   $n = count($a);
   $max = $a[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $a[$i])
           $max = $a[$i];
    return $max;      
}
 

function min_arr($a)
{
   $n = count($a);
   $min = $a[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $a[$i])
           $min = $a[$i];
    return $min;      
}
 

$arr = array(10, 22, 35, 47, 59);
echo ("Elements in array set : ");
foreach ($arr as $i) {
    echo "$i, ";
}
echo "<br>";
echo ("Maximum number in array set : ");
echo(max_arr($arr));
echo "<br>";
echo ("Minimum number in array set : ");
echo(min_arr($arr));
?>