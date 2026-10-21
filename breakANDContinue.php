<?php

#break && continue
//break
$counter = 1;

while (true){
    echo "this is do while loop in php" . $counter . PHP_EOL;
$counter++;
    if ($counter > 10) {
        break;
    }
}

//continue
//2
for ($counter = 0; $counter <= 20; $counter ++) {
    if ($counter % 2 == 0){ //nampilin ganjil
        continue;
    }
    echo "Hello continue" . $counter .PHP_EOL;
}
// 1
for ($counter = 0; $counter <= 20; $counter ++) {
    if ($counter % 2 == 1){ //nampilin genap
        continue;
    }
    echo "Hello continue" . $counter .PHP_EOL;
}
