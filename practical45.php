<?php
$score = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answers = [
        'q1' => 'b', 
        'q2' => 'a', 
        'q3' => 'c'  
    ];

    // Check each answer
    foreach ($answers as $q => $correct) {
        if (isset($_POST[$q]) && $_POST[$q] == $correct) {
            $score++;
        }
    }

    echo "<h3>Your score is: $score / 3</h3>";
}
?>

<form method="POST">
    <h3>1. PHP is?</h3>
    <input type="radio" name="q1" value="a" required> Programming language<br>
    <input type="radio" name="q1" value="b"> Server-side language<br>
    <input type="radio" name="q1" value="c"> Web browser<br><br>

    <h3>2. HTML stands for?</h3>
    <input type="radio" name="q2" value="a" required> HyperText Markup Language<br>
    <input type="radio" name="q2" value="b"> HighText Machine Language<br>
    <input type="radio" name="q2" value="c"> Hyperlinks and Text Markup Language<br><br>

    <h3>3. JavaScript is used for?</h3>
    <input type="radio" name="q3" value="a" required> Styling web pages<br>
    <input type="radio" name="q3" value="b"> Database<br>
    <input type="radio" name="q3" value="c"> Web scripting<br><br>

    <input type="submit" value="Submit Quiz">
</form>