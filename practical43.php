<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $language = $_POST['language'];

    echo "Your favorite programming language is: " . $language;
}
?>

<form method="POST">
    <h3>Which is your favorite programming language?</h3>
    
    <input type="radio" name="language" value="PHP" required> PHP <br>
    <input type="radio" name="language" value="JavaScript"> JavaScript <br>
    <input type="radio" name="language" value="Python"> Python <br><br>

    <input type="submit" value="Submit">
</form>