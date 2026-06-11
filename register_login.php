<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>student login</h1>
    <form method="post">
        user name : <input type="text" name="username"><br><br>
        password :<input type="password" name="password"><br><br>
        <input type="submit" value="submit">
</form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "bca5" && $password =="12345"){
            header("Location: welcome.php");
        }
        else{
            echo"Invalid username or password";
        }
    }
?>