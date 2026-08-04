<?php

$conn = mysqli_connect("localhost", "root", "", "studentdb");

if(isset($_POST['save']))
{
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $sql = "INSERT INTO student(fullname,mobile,city)
            VALUES('$fullname','$mobile','$city')";

    if(mysqli_query($conn, $sql))
    {
        echo "Data Saved Successfully";
    }
    else
    {
        echo "Error";
    }
}

?>

<html>
<body>

<h2>Student Registration</h2>

<form method="post">

Full Name:
<input type="text" name="fullname"><br><br>

Mobile:
<input type="text" name="mobile"><br><br>

City:
<input type="text" name="city"><br><br>

<input type="submit" name="save" value="Save">

</form>

</body>
</html>