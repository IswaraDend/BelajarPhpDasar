<?php

$name = "Iswara";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "age : ";
echo $age;
echo "\n";

echo "isnamenull? : ";
echo var_dump(is_null($name));
echo "\n";

$contoh = "ADA";
unset($contoh);

var_dump(isset($contoh));

