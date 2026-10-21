<?php
#for biasa
$names = ["Muhammad", "Hilmi", "Azkia", "Rahman"];

for ($i = 0; $i < count($names); $i++) {
    echo "data ke $i: $names[$i]" . PHP_EOL;
}

#for each
foreach ($names as $name) {
    echo "data $name" . PHP_EOL;
}

#for each dengan key
$person = [
    "first-name" => "Muhammad",
    "middle-name" => "Hilmi",
    "middle2-name" => "Azkia",
    "last-name" => "Rahman"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}