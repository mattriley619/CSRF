<?php
session_start();

$_SESSION["username"] = $_POST["username"];
$username = $_SESSION["username"];
?>

<html>
<body>

<?php

//echo "$username";
?><br>


<form action='display.php' method='POST'>
    Favorite Color?:
    <input type="radio" name="color" value="red">Red
    <input type="radio" name="color" value="blue">Blue
    <input type="radio" name="color" value="green">Green
    <input type="submit" value="Submit">
</form>

</body>
</html><?php
