<?php
// Start the session
session_start();

$cookie_name = $_GET['name'];
$cookie_value = $_GET['day'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set: " . $_SESSION["favcolor"] . " & " . $_SESSION["favanimal"] ;
?>

<a href="2.php">Link</a>

<br><br>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>



</body>
</html>
