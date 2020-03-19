<?php

$numbers = $_GET["numbers"];
$lowest = 100000;
$highest = -500;
$sum = 0;
$count = 0;

foreach ($numbers as $number) {
    if (is_numeric($number)) {
        print("$number ");

        if ($number < $lowest) {
            $lowest = $number;
        }

        if ($number > $highest) {
            $highest = $number;
        }

        $sum += $number;
        $count++;
    }
}

print("<br><br>");
print("Laagste: " . $lowest . "<br>");
print("Hoogste: " . $highest . "<br>");
print("Gemiddelde: " . $sum / $count);
