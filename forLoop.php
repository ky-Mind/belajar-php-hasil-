<?php

#for loop
$counter = 1;
for (;$counter <= 2 ;) {
    echo "this is for loop in php" . $counter . PHP_EOL;
$counter++;
}

#init statement
for ($counter = 1; $counter <= 3 ;) {
    echo "this is for loop in php" . $counter . PHP_EOL;
$counter++;
}

#post statement
for ($counter = 1; $counter <= 4 ; $counter++) {
    echo "this is for loop in php" . $counter . PHP_EOL;
}

#syntax alternatif
for ($counter = 1; $counter <= 5 ; $counter++) :
    echo "this is for loop in php" . $counter . PHP_EOL;
endfor;