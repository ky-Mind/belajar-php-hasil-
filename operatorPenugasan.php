<?php
//operator biasa atau aritmatika
$total= 0;

$chicken = 15000;
$water = 5000;
$rice = 5000;

$total = $total + $chicken;
$total = $total + $water;
$total = $total + $rice;

var_dump($total);

//Operator penugasan ini:
$total= 0;

$chicken = 15000;
$water = 5000;
$rice = 5000;

$total += $chicken;
$total += $water;
$total += $rice;

var_dump($total);
