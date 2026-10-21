<?php

//Dot Operator
$name = "Muhammad Hilmi Azkia Rahman";

echo "name : " .$name .PHP_EOL;
echo "name : ";
echo $name;
echo PHP_EOL;

//Konversi ke number dan sebaliknya

$valueString = (string) 100;
var_dump($valueString);

$valueInt = (Int) "100";
var_dump($valueInt);

$valueFloat = (Float) "01.101";
var_dump($valueFloat);

#mengakses karakter
$name = "Hilmi Kia";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;
echo $name[6] . PHP_EOL;

#Concatenation
echo "Hello " . $name . ", selamat belajar PHP" . PHP_EOL;
#Variable Parsing
echo "Hello $name, selamat belajar PHP" . PHP_EOL;


#Curly brase
$var = "Kia";
echo "this is {$var}s" . PHP_EOL;