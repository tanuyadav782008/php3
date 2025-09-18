<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['operation'];

    $result = 0;

    if ($op == "+") {
        $result = $num1 + $num2;
    } elseif ($op == "-") {
        $result = $num1 - $num2;
    } elseif ($op == "*") {
        $result = $num1 * $num2;
    } elseif ($op == "/") {
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Cannot divide by zero!";
        }
    }

    echo "<h3>Result: $result</h3>";
}

?>