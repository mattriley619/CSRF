<?php
session_start();
$CSRF = false;


if (isset($_POST["username"])) {
    $_SESSION["username"] = $_POST["username"];
}
if(!isset($_SESSION["username"])){
    echo "No username in session.";
    exit;
}

if($CSRF && !isset($_SESSION["csrf_token"])) {
    $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
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
    <?php
    if ($CSRF && isset($_SESSION["csrf_token"])){
        echo '<input type="hidden" name="csrf_token" value="' . $_SESSION["csrf_token"] . '">';
        }
    ?>
    <input type="submit" value="Submit">
</form>

</body>
</html>
