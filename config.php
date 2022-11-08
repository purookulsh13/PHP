<?php
    $name = $_POST['uname'];
    $em = $_POST['Email'];
    $pass = $_POST['password'];

    // echo $name.$em.$pass;

    $connection = mysqli_connect("localhost","root","","dbpuroo");

    if(!$connection){
        die("Problem in Connection");
    }

    if(isset($_POST['save']))
    {
        $insert_qr = "INSERT INTO userdb(UserName,Email,Password) VALUES ('$name','$em','$pass')";
        if(mysqli_query($connection,$insert_qr)){
            echo "Query is Sumbitted";
            header("refersh:5,url=form_1.html");
        }
    }

    if(isset($_POST['reset']))
    {
        echo "Rewrite your Belongings";
    }

    if(isset($_POST['display']))
    {
        $display_qr = "Select * from userdb";
        $res = mysqli_query($connection,$display_qr);
        if(mysqli_num_rows($res)>0)
        {
            while($data = mysqli_fetch_assoc($res)){
                echo $data['id']." ";
                echo $data['UserName']." ";
                echo $data['Email']." ";
                echo $data['Password']."<br>";
            }
        }
        else{
            echo "No record found";
        }
    }

?>
