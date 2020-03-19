<?php

require_once("wiskunde.php");
$number = $_GET["number"];

if (ctype_digit($number) && $number > 0) {
    faculteit($number);
}

