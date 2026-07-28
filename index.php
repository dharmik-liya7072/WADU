<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<h2>Create Cookie</h2>

<form method="post">
    Name:
    <input type="text" name="username" required>
    <br><br>
    <input type="submit" name="save" value="Save">
</form>

<?php
if (isset($_POST['save'])) {
    $name = $_POST['username'];

    // Create cookie for 1 hour
    setcookie("username", $name, time() + 3600);

    echo "<br>Cookie Created Successfully!";
    echo "<br><a href='show.php'>Click Here to View Cookie</a>";
}
?>

</body>
</html>