<?php

$depan = [
    "namaDepan" => "Muhammad"
];

$tengah = [
    "namatengah" => "Hlmi"
];

$belakang = [
    "namaBelakangBelakang" => "Rahman"
];

$full = $depan + $tengah + $belakang;
var_dump($full);

$depan = [
    "namaDepan" => "Tiara"
];

$tengah = [
    "namatengah" => "Wahyu"
];

$belakang = [
    "namaBelakangBelakang" => "Amalia"
];

$full = $depan + $tengah + $belakang;
var_dump($full);



$a = [
    "namatengah" => "hilmi",
    "namaBelakangBelakang" => "kia"
];

$b = [
    "namaBelakangBelakang" => "kia",
    "namatengah" => "hilmi"
];

var_dump($a == $b);
var_dump($a === $b);