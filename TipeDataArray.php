<?php

$values = array(10,9,8, 7.5);

var_dump($values);

$names = ["Iswara","Dendy","Arta"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[0]);
var_dump($names);

$iswa = array(
    "id" => "Iswara",
    "name" => "Iswara Dendy Arta",
    "age" => 25,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);

var_dump($iswa);

var_dump($iswa["age"]);
var_dump($iswa["address"]["country"]);

$bags = [
    "id" => "Bgas",
    "name" => "bgas tri",
    "age" => 25,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];


var_dump($bags);

var_dump($bags["age"]);
var_dump($bags["address"]["country"]);
