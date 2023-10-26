<?php

$counter = 1;
while ($counter <=10) {
    echo "Ini adalh for while ke-$counter" . PHP_EOL;
    $counter++;
}


$counter = 10;
while ($counter >= 1) :
    echo "Ini adalh for while ke-$counter" . PHP_EOL;
    $counter--;
endwhile;