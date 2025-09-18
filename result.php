<!DOCTYPE html>
<html lang="en">
<head>
    <title>Result check</title>
</head>
<body>
    <form method="GET" >
        Enter your marks: <input type="text"
        name="marks"><br><br>
        <input type="submit" value="Check Result">
</form>
<?php
if(isset($_GET['marks'])){
$marks = $_GET['marks'];
if($marks >= 40) {
    echo "Pass";
}else{
    echo "Fail";

}}
?> 
</body>
</html>