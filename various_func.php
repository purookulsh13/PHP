<html>
    <title>Various_function</title>
    <body>
        <form action="various_func.php" method="post">
            <table>
            <tr><td>  Enter the Value :  <input type="text" name="a"></tr></td>
            <tr><td>  Select the Operation :  1.Factorial 2.Prime 3.Area of square<br><input type="text" name="b" placeholder="Provide only Value"></tr></td>
                <tr><td><input type="submit" name="sumbit" value="sumbit"/></tr></td>
            </table>
        </form>      
    </body>
</html>


<?php
    if (isset($_POST['a'])){
        $num1 = $_POST['a'];
    }
    if (isset($_POST['b'])){
        $num2 = $_POST['b'];
        
    }

    function fact($num1){
        $fact = 1;  
        for ($i=$num1;$i>=1;$i--){  
            $fact = $fact*$i;  
        }  
        echo "Factorial of $num1 is $fact"; 
    }

    function Prime($num1){
        if ($num1 == 1)
            echo ("Not a prime number");
        for($i=2;$i<$num1;$i++){
            if($num1 % $i == 0)
                echo ("Prime number");
        }
        echo ("Not a prime number");
    }

    function Area($num1){
        $res = $num1 * $num1;
        echo "Area of square is $res"; 
    }
    
    switch ($num2){
        case 1:
            fact($num1);
            break;
        case 2:
            Prime($num1);
            break;
        case 3:
            Area($num1);
            break;
        default:
            echo ("Not valid submission");
    }
    

    

?>