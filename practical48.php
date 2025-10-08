<?php
if (isset($_COOKIE["username"])) {
    $name = $_COOKIE["username"];
    echo "Welcome back, $name!";
} 
else {
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        setcookie("username", $name, time() + 86400, "/");
        echo "Hello, $name! We’ll remember you next time.";
    } else {
        ?>
        <form method="post">
            Enter your name: <input type="text" name="name">
            <input type="submit" value="Submit">
        </form>
        <?php
    }
}
?>