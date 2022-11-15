<?php
    function reverseDigits($num)
    {
        $rev = 0;
        while ($num>1)
        {
            $rev = $rev * 10 + $num % 10;
            $num = (int)$num / 10;
        }
        
        echo "Reverse the number : $rev";
        printf("\n");
        return $rev;
    }
     
    function square($num)
    {
        $sq=$num*$num;
        echo "Square of $num is $sq";
        // echo "</br>";
        printf("\n");
        return ($num * $num);
    }

    function root($num)
    {
        echo "Underoot the number ";
        echo (int)sqrt($num);
        printf("\n");
        // echo "</br>";
        return sqrt($num);
    }
     
    function checkAdamNumber($num)
    {
        $b = reverseDigits(square($num));
        $c = root($b);
        $d = reverseDigits($c);
        
        
         
        if ($num == $d)
        {
            return 1;
        }

        return 0;
    }
     
    
    
    $num = (int)readline('Enter the number : '); 
    echo "Input number is $num";
    printf("\n");
    if(checkAdamNumber($num)){
        echo "Adam Number";
    }
    else{
        echo "Not a Adam number";
    }
     
?>