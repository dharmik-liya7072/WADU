<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array in PHP</title>
</head>
<body>

<h2>Reverse an Array</h2>

<form method="post">
    Enter array values (comma separated): <br><br>
    <input type="text" name="numbers" placeholder="10,20,30,40,50" size="40">
    <br><br>
    <input type="submit" value="Reverse Array">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input = $_POST["numbers"];

    
    $array = explode(",", $input);

    
    $reverseArray = array_reverse($array);

    echo "<h3>Original Array:</h3>";
    echo implode(", ", $array);

    echo "<h3>Reversed Array:</h3>";
    echo implode(", ", $reverseArray);
}
?>

</body>
</html>