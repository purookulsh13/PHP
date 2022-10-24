<?php
    function reverseDigits($num)
    {
        $rev = 0;
        $rem = 0;
        $temp = $num;
        while ($temp!=0)
        {
            $rem = $temp % 10;
            $rev = $rev * 10 + $rem;
            $temp /= 10;
        }
        echo "$num";
        echo "Reverse the number : $rev</br>";
        return $rev;
    }
     
    function square($num)
    {
        $sq=$num*$num;
        echo "Square of $num is $sq</br>";
        return ($num * $num);
    }

    function root($num)
    {
        echo "Underoot the number ";
        echo sqrt($num);
        echo "</br>";
        return sqrt($num);
    }
     
    function checkAdamNumber($num)
    {
        $a = square($num);
        $b = reverseDigits($a);
        $c = root($b);
        $d = reverseDigits($c);
        
        
         
        if ($num == $d)
        {
            return 1;
        }

        return 0;
    }
     
    
    
    $num = 12; 
    echo "Input number is $num</br>";
    if(checkAdamNumber($num)){
        echo "Adam Number";
    }
    else{
        echo "Not a Adam number";
    }
     
?>