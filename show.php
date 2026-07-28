<!DOCTYPE html>
<html>
<head>
    <title>Show Cookie</title>
</head>
<body>

<h2>Cookie Value</h2>

<?php
if (isset($_COOKIE["username"])) {
    echo "Username: " . $_COOKIE["username"];
} else {
    echo "Cookie Not Found!";
}
?>

</body>
</html>