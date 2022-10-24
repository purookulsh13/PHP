<?php
    
    $guessnum = rand(1,100);

    printf("Guess the number between 1-100\n");
    
    do{
        $inputnum = (int)readline('Enter your Number : ');
        if($inputnum==$guessnum){
            exit('You guessed the correct number');
            
        }
        else{
            if($inputnum<$guessnum)
                echo "Your number is smaller than expected number";
            else if($inputnum>$guessnum)
                echo "Your number is greater than expected number";
        }
    }while($guessnum==$inputnum)
?>