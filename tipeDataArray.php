<?php
//Array
$values = array(10, 9, 8, 7, 6.5, 5);
var_dump($values);


$names = array("Muhammad", "Hilmi", "Azkia", "Rahman");
var_dump($names);


var_dump($names[2]);

$names[2] = "Budi";
var_dump($names);

unset($names[2]);
var_dump($names);

$names[] = "Azkia";
var_dump($names);

var_dump(count($names));

// Array sebagai map
$kia = array(
    "id" => "Kia",
    "name" => "Muhammad Hilmi",
    "age" => 19
);

var_dump($kia);

var_dump($kia["name"]);


//Array dalam Array
$kia = array(
    "id" => "Kia",
    "name" => "Muhammad Hilmi",
    "age" => 19,
    "address" => array (
    "city" => "Sukabumi",
        "country" => "Indonesia"
    )
);

var_dump($kia);
var_dump($kia["address"]["country"]);


