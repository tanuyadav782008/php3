<?php
$cookie_name = "visit_count";
if(isset($_COOKIE[$cookie_name])) {
    $visit = $_COOKIE[$cookie_name] + 1;
} else {
    $visit = 1;
}
setcookie($cookie_name, $visit, time() + (86400), "/"); 
if($visit == 1) {
    echo "This is your first visit!";
} else {
    echo "You have visited $visit times.";
}
?>