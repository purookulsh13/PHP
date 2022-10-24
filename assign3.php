<?php
    // #1
    $str1 = "PLAYSTATION PS5";
    $str2 = "playstation ps5";
    echo strtoupper("<br><b><u>Uppercase String :</b></u> $str2"."<br>");
    echo strtolower("<br><b><u>Lowercase String :</b></u> $str1<br>");
    echo ucfirst("<br><b><u>First character Uppecase String :</b></u> $str2<br>");
    echo ucwords("<br><b><u>First character Uppecase String :</b></u> $str2");

    // #2
    $str3= '082307'; 
    echo substr(chunk_split($str3, 2, ':'), 0, -1);


    // #3
    $str4 = 'The quick black fox jumps over the white dog.';
    if (strpos($str4,'over') !== false) {
        echo 'Present';
    }
    else{
        echo 'Not Present';
    }


    // #4
    $x =  20;        
    $str5 = (string)$x; 
    printf("$str5");


    // #5
    $str6 = 'ak@creation.com';
    echo substr($str6, -3);


    // #6
    $var1= 65.45;
    $var2 = 104.35;
    printf("%0.2f", $var1+$var2); 


    // #7
    $str6 = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";


    // #8
    echo str_replace("the","That","the moon is round in shape");


    // #9
    $str7 = 'facebook';
    $str8 = 'faceboll';
    $str_pos = strspn($str7,$str8);
    echo "First difference between two strings at position ,$str_pos, $str7[$str_pos] vs $str8[$str_pos]";
    echo "<br><br>";


    // #10
    $str9 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
    $arr = explode("\n", $str9);
    var_dump($arr);
    
?>