<?php

$names = ["Iswara", "Dendy", "Arta"];

for ($i=0; $i < count($names); $i++) { 
    echo "Data le $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

$person = [
    "first_name" => "Iswara",
    "middle_name" => "Dendy",
    "last_name" => "Arta"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}