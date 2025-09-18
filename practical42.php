<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
<form method="POST" action="calculator.php">
    Enter first number: <input type="number" name="num1" required><br><br>
    Enter second number: <input type="number" name="num2" required><br><br>

    Select operation:
    <select name="operation">
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>
</body>
</html>