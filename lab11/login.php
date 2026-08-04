<?php
session_start();

if(isset($_POST['login']))
{
    if($_POST['username']=="admin" && $_POST['password']=="123")
    {
        $_SESSION['user']="admin";
        header("Location: home.php");
    }
    else
    {
        echo "Invalid Login";
    }
}
?>

<html>
<body>

<h2>Login</h2>

<form method="post">
Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

<input type="submit" name="login" value="Login">

</form>

</body>
</html>