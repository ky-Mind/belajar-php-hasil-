<?php

// $gender = "pria";
// $hi = "null";
// if ($gender == "PRIA") {
//     $hi = "Hi!, bro";
// } elseif ($gender == "WANITA") {
//     $hi = "Hi!, nona";
// } else {
//     $hi = "who are you !!??";
// }
// echo $hi . PHP_EOL;

$gender = "PRIA";
$hi = $gender == "PRIA" ? "Hi!, Bro" : "Hi!, Nona";
echo $hi . PHP_EOL;

#Ternary Nested
$gender = "WANITA";
$hi = ($gender == "PRIA") ? "Hi!, Bro" : (($gender == "WANITA") ? "Hi!, Nona" : "Hi!, Kak");
echo $hi . PHP_EOL;