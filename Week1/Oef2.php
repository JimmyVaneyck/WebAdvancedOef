<?php
/*function maakRij($min, $max, $stap = 1) {
    $index = 0;
    $result = array(); //normaal een string

    for ($i = $min; $i <= $max; $i += $stap) {
        $result[$index] = $i;
        $index++;
    }

    return $result;
}*/

function maakRij($min, $max, $stap = 1) {
    $result = "[";

    for ($i = $min; $i <= $max; $i += $stap) {
        if ($i > $min) {
           $result .= ",";
        }

        $result .= $i;
    }

    return $result . "]";
}

$result = maakRij(2, 5, 1);
print($result);