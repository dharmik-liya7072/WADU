<?php
// Start Session
session_start();

if (isset($_POST['save'])) {
    $_SESSION["username"] = $_POST["username"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Session</title>
</head>
<body>

<h2>Create Session</h2>

<form method="post">
    Enter Name:
    <input type="text" name="username" required>
    <br><br>
    <input type="submit" name="save" value="Save">
</form>

<?php
if (isset($_SESSION["username"])) {
    echo "<br>Session Created Successfully!";
    echo "<br>Username: " . $_SESSION["username"];
}
?>

</body>
</html>