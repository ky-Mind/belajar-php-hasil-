<?php

$a = 1;
$b = $a++;
// ini belakangan :
//$b = $a;
//$a = $a + 1;

var_dump($b);
var_dump($a);

$a = 1;
$b = ++$a;
// ini duluan :
//$a = $a + 1;
//$b = $a;

var_dump($b);
var_dump($a);