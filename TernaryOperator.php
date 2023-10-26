<?php

$gender = "PRIA";
$hi = null;

if ($gender == "PRIA") {
    $hi = "hi bro!";
} else {
    $hi = "hi Nona";
}

$hi = $gender == "PRIA" ? "Hi BRO!" : "Hi Nona!";

echo $hi . PHP_EOL;