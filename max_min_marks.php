<html>
    <title>Convert</title>
    <body>
        <form action="max_min_marks.php" method="post">
            <table>
            <tr><td>  Decimal Value :  <input type="text" name="a"></tr></td>
            <tr><td>  Binary Value :   <input type="text" name="b"></tr></td>
                <tr><td><input type="submit" name="sumbit" value="sumbit"/></tr></td>
            </table>
        </form>      
    </body>
</html>

<?php
    
    if (isset($_POST['a'])){
        $num1 = $_POST['a'];
        echo decbin($num1);
    }
    echo "<br>";
    if (isset($_POST['b'])){
        $num2 = $_POST['b'];
        echo bindec($num2);
    }
    
    
?>