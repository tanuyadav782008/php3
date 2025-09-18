<!DOCTYPE html>
<html>
<head>
    <title>Welcome Form</title>
</head>
<body>
<form method="POST" action="">
    Enter your name: <input type="text" name="username">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];  
    echo "Welcome, " . $name . "!";  
}
?>

</body>
</html>