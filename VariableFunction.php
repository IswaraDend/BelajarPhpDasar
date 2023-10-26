<?php

function foo()
{
    echo "foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name) : string
{
    return "Sample $name";
}

sayHello("Iswara","sampleFunction");
sayHello("Iswara","strtoupper");
sayHello("Iswara","strtolower");