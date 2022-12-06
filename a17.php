<html>
<body>
<form action="a17.php" method="post">
<table>
<tr><th>Login</th></tr>
<tr><td>Username</td><td><input type="email" name="uname"></td></tr>
<tr><td>Pssword</td><td><input type="password" name="psw"></td></tr>
<tr><td colspan="2"><input type="submit" name="login" value="login"></td></tr>
</table>
</form>
</body>
</html>
<?php
$username = "admin@com";
$passw = "admin";
session_start();
if(isset($_SESSION['user']))
{
echo "welcome"."<h3 style='color:red' align='right'>".$_SESSION['user']."</h3>";
echo "<h4>You are scrolling home page data</h4>";
echo "<a href='./product.php'>Click here for navigate to Product Details Page</a>";
echo "<br><a href='logout.php'><input type=submit name=logout value=logout></a>";
}
else{
if($username == $_POST['uname'] and $passw == $_POST['psw'])
{
$_SESSION['user'] = $username;
echo "<script>location.href='home.php'</script>";
}
else{
echo "<script>alert('invalid username and password!!!')</script>";
echo "<script>location.href='login.html'</script>";
}
}
// ?>
// <?php
session_start();
if(isset($_SESSION['user']))
{
echo "welcome"."<h3 style='color:red' align='right'>".$_SESSION['user']."</h3>";
echo "<h4>You are scrolling Details page data</h4>";
echo "<a href='home.php'>Click here for navigate to Home Page</a>";
echo "<br><a href='logout.php'><input type=submit name=logout value=logout></a>";
}
else{
echo "<script>location.href='login.html'</script>";
}
// ?>
// <?php
session_start();
if(isset($_SESSION['user']))
{
unset($_SESSION['user']);
echo "<script>location.href='login.html'</script>";
}
else{
echo "<script>location.href='login.html'</script>";
}
?> 
