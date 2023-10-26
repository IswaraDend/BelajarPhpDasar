 <?php

 $sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
 };

 $sayHello("Iswara");
 $sayHello("Dendy");

 function sayGoodBye(string $name, $filter)
 {
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
 }

 sayGoodBye("Iswara", function (string $name) : string {
    return strtoupper($name);
 });

 $filterFunction = function (string $name) : string {
    return strtoupper($name);
 };

 sayGoodBye("Iswara", $filterFunction);

 $firstName = "Iswara";
 $lastName = "Dendy";

 $sayHelloDen = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
 };
 $sayHelloDen();

 $firstName = "Bagas";
 $lastName = "tri";
 $sayHelloGas = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
 };
 $sayHelloGas();