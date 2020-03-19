<?php

$name = $_GET["name"];
$color = $_GET["color"];

session_start();
$_SESSION['name'] = $name;
$_SESSION['color'] = $color;

header("Location: toon.php");