<?php

$aantalLijnen = 7;

for ($i = 0; $i <= $aantalLijnen; $i++) {
    $spaties = $aantalLijnen - ($i + 1);

    for ($j = 0; $j <= $spaties; $j++) {
        echo "&nbsp;&nbsp;";
    }

    for ($l = 0; $l < ($i * 2) + 1; $l++) {
        print ("#");
    }

    print ("<br>");
}