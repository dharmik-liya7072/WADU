<?php
// Delete the cookie
setcookie("username", "", time() - 3600);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Cookie</title>
</head>
<body>

<h2>Delete Cookie</h2>

<?php
echo "Cookie Deleted Successfully!";
?>

</body>
</html>