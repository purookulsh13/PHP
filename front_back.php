<?php
    for ($i=1; $i<=100;$i++)
    {
        if ($i%3==0 && $i%5==0 )
        {
            echo ("Fullstack");
            echo ("<br>");
        }
        
        else if ( $i%3 == 0 ) 
        {
            echo ("Frontend");
            echo ("<br>");
        }
        
        else if ( $i%5 == 0 ) 
        {
            echo ("Backend");
            echo ("<br>");
        }

        else{
            echo ($i);
            echo ("<br>");
        }
    }
?>