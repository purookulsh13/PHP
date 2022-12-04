<html>
    <title>Registration</title>
    <body>
        <form action="registration.php" method="post">
            <table>
            <tr><td>  Name :        <input type="text" name="uname"></tr></td>
            <tr><td>  Age :         <input type="text" name="age" size="3"></tr></td>
            <tr><td>  Email :       <input type="text" name="mail" placeholder="@gmail.com"></tr></td>
            <tr><td>  Password :    <input type="text" name="pass"></tr></td>
            <tr><td>  Resume :       <input type="file" id="resume"></tr></td>
            <tr><td>  Gender :       Male<input type="radio" name="gender" value="Male"> Female<input type="radio" name="gender" value="Female"></tr></td>
            <tr><td>  Martial Status :      Married<input type="checkbox" name="marry" value="Married">Single<input type="checkbox" name="marry" value="Single"></tr></td>

                <tr><td> <tr><td><input type="submit" name="sumbit" value="sumbit"/></tr></td></tr></td>
            </table>
        </form>      
    </body>
</html>

<?php
    if (isset($_POST['uname'])){
        $num1 = $_POST['uname'];
        echo ("Name : $num1");
    }
    echo "<br>";
    if (isset($_POST['age'])){
        $num2 = $_POST['age'];
        echo ("Age : $num2");
    }
    echo "<br>";
    if (isset($_POST['mail'])){
        $num3 = $_POST['mail'];
        echo ("Email : $num3");
    }
    echo "<br>";
    if (isset($_POST['pass'])){
        $num4 = $_POST['pass'];
        echo ("Password : $num4");
    }
    echo "<br>";
    if (isset($_POST['gender'])){
        $num5 = $_POST['gender'];
        echo ("Gender : $num5");
    }
    echo "<br>";
    if (isset($_POST['marry'])){
        $num6 = $_POST['marry'];
        echo ("Martial status : $num6");
    }
?>