<?php
    
    $guessnum = rand(1,100);

    printf("Guess the number between 1-100\n");
    $i=500;  
    do{
        $i--;
        printf("\n");
        $inputnum = (int)readline('Enter your Number : ');
        if($inputnum==$guessnum){
            exit('You guessed the correct number');
            
        }
        else{
            if($inputnum<$guessnum){
                echo "Your number is smaller than expected number";
                printf("\n");
                // echo "You have remaining only $i chances";
            }   
                else if($inputnum>$guessnum){
                echo "Your number is greater than expected number";
                printf("\n");
                // echo "You have remaining only $i chances";
            }
                
        }
        
    }while($i>0)
?>