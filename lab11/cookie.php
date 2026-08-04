<?php

if(isset($_COOKIE["user"]))
{
    echo "<h2>Welcome Back!</h2>";
    echo "You are a repeated user.";
}
else
{
    setcookie("user", "Dharmik", time()+60*60*24*7); // Cookie for 7 days
    echo "<h2>Welcome!</h2>";
    echo "You are a new user.";
}

?>

<html>
<body>

<br><br>
<a href="cookie.php">Refresh Page</a>

</body>
</html>