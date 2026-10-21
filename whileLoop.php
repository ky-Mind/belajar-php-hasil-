<?php

#while loop
$counter = 1;
while ($counter <= 5) {
    echo "this is while loop in php" . $counter . PHP_EOL;
$counter++;
}

#syntax alternatif
$counter = 1;
while ($counter <= 5) :
    echo "this is while loop in php" . $counter . PHP_EOL;
$counter++;
endwhile;