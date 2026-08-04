<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}
?>

<html>
<body>

<h2>Welcome Admin</h2>

<a href="logout.php">Logout</a>

</body>
</html>