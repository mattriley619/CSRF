<?php
session_start();

if (!isset($_SESSION["username"])) {
    if (!empty($_POST["username"])) {
        $_SESSION["username"] = $_POST["username"];
    } else {
        echo "No username set.";
        exit;
    }
}

$username = $_SESSION["username"];
?>

<html>
<body>

<form action='display.php' method='POST'>
    Favorite Color?:
    <input type="radio" name="color" value="red">Red
    <input type="radio" name="color" value="blue">Blue
    <input type="radio" name="color" value="green">Green
    <input type="submit" value="Submit">
</form>

</body>
</html>
