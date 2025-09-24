<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($username) || empty($email) || empty($password)) {
    echo "Error: All fields are required!";
} else {
    echo "<h3>Registration Successful!</h3>";
    echo "Username: $username <br>";
    echo "Email: $email <br>" ;
    echo "Password: $password <br>";
}
?>