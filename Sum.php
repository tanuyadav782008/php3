<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Number</title>
</head>
<body>
    <form method="GET"action="">
        Enter frist number: <input type="text"
        name="num1"><br><br>
        Enter second number: <input type="text"
        name="num2"><br><br>
        <input type="submit" value="Calculate Sum">
</form>
<?php
if(isset($_GET['num1'])&&
isset($_GET['num2'])) {
    $num1 =$_GET['num1'];
    $num2 =$_GET['num2'];
    $sum= $num1 +$num2;
    echo "The sum of $num1 and $num2 is:$sum";
}
?>
</body>
</html>