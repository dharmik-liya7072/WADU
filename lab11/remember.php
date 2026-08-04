<?php

if(isset($_POST['save']))
{
    setcookie("username", $_POST['username'], time()+86400);
    setcookie("password", $_POST['password'], time()+86400);

    echo "Login Successful";
}

?>

<html>
<body>

<h2>Remember Me Login</h2>

<form method="post">

Username:
<input type="text" name="username"
value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">

<br><br>

Password:
<input type="password" name="password"
value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">

<br><br>

<input type="submit" name="save" value="Login">

</form>

</body>
</html>