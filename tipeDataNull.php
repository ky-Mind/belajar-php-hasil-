<?php

//TIPE DATA NULL

$name = "Kia";
// $name = null;
$age = 19;
// $age = null;

echo "name: ";
echo $name;
echo "\n";

echo "name: ";
echo $age;
echo "\n";

echo "is name null: ";
var_dump (is_null($name));
echo "\n";

//MENGHAPUS VARIABLE
unset($age);

// echo $age;

// MENGECEK VARIABLE ADA ATAU TIDAK DAN NULL ATAU TIDAK
$age = null;

var_dump(isset($age));
