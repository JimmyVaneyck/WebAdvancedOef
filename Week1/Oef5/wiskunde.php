<?php

function faculteit($number)
{
    $result = 1;

    for ($i = 2; $i <= $number; $i++) {
        $result *= $i;
    }

    print ("Resultaat: " . $result);
}