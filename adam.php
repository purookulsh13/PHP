<html>
    <title>Adam</title>
    <body>
        <form action="adam.php" method="post">
            <table>
            <tr><td>Enter the Number : <input type="text" name="a"></tr></td>
                <tr><td><input type="submit" name="sumbit" value="sumbit"/></tr></td>
            </table>
        </form>      
    </body>
</html>


<?php

function reverseDigits($num)
{
    $rev = 0;
    while ($num > 0)
    {
        $rev = $rev * 10 + $num % 10;
        $num = (int) $num / 10;
    }
    return $rev;
}
 
function checkAdamNumber($num)
{
    
    $a = $num * $num;
    $b = reverseDigits($num);
    $b = $b * $b;
     
    if ($a == reverseDigits($b))
        return 0;
    return -1;
}
 

if (isset($_POST['a'])){
    $num = $_POST['a'];
}
 
if (checkAdamNumber($num))
    echo "$num is Adam Number";
else
    echo "$num is not a Adam Number";
 

?>

 