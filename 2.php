<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favanimal"] = "dog";
echo "Session variables are set: " . $_SESSION["favcolor"] . " & " . $_SESSION["favanimal"] ;
?>

<a href="cookietest.php">Link</a>




</body>
</html>
