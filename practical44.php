<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    header("Location: thankyou.php?name=" . urlencode($name));
    exit(); 
}
?>

<form method="POST">
    <h3>Feedback Form</h3>
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Message: <textarea name="message" required></textarea><br><br>
    <input type="submit" value="Submit">
</form>
