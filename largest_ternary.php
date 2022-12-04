<html>
    <title>Largest number</title>
    <body>
        <form action="largest_ternary.php" method="post">
            <table>
            <tr><td>  First number :  <input type="text" name="a"></tr></td>
            <tr><td>  Second number :   <input type="text" name="b"></tr></td>
            <tr><td>  Third number :  <input type="text" name="c"></tr></td>
            <tr><td>  fourth number :   <input type="text" name="d"></tr></td>
                <tr><td><input type="submit" name="sumbit" value="sumbit"/></tr></td>
            </table>
        </form>      
    </body>
</html>

<?php
    if (isset($_POST['a'])){
        $n1 = $_POST['a'];
    }

    if (isset($_POST['b'])){
        $n2 = $_POST['b'];
    }

    if (isset($_POST['c'])){
        $n4 = $_POST['c'];
    }

    if (isset($_POST['d'])){
        $n4 = $_POST['d'];
    }

    $max = ($n1 > $n2 && $n1 > $n3 && $n1 > $n4) ? $n1 : (($n2 > $n3 && $n2 > $n4) ? $n2 : ($n3 > $n4 ? $n3 : $n4));

    echo ("Largest number : ");
    echo ($max);
 

?>