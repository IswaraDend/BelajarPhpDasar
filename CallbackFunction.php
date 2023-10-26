<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("iswara","strtoupper");
sayHello("IswarA","strtolower");
sayHello("isWAra", function (string $name) : string {
    return strtoupper($name);
});
sayHello("Iswara", fn($name) => strtoupper($name));