<?php

session_start();
print($_SESSION['name'] . "<br>");
$color = $_SESSION['color'];

echo "<body style='background-color:$color'>";