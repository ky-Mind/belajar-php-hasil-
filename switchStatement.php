<?php

$nilai = "e";
#ini baru switch statement
switch($nilai){
case "A":
    echo "Anda lulus dengan baik" . PHP_EOL;
    break;
case "B":
    echo "Anda lulus lumayan baik" . PHP_EOL;
    break;
case "C":
    echo "Anda lulus hampir baik" . PHP_EOL;
    break;
case "D":
    echo "Anda lulus kurang baik" . PHP_EOL;
    break;
default:
    echo "Anda salah jurusaan" . PHP_EOL;
}

#ini if statement
// if($nilai == "A") {
//     echo "Anda lulus dengan baik" . PHP_EOL;
// } elseif ($nilai == "B") {
//     echo "Anda lulus lumayan baik" . PHP_EOL;
// } elseif ($nilai == "C") {
//     echo "Anda lulus hampir baik" . PHP_EOL;
// } elseif ($nilai == "D") {
//     echo "Anda lulus kurang baik" . PHP_EOL;
// } else {
//     echo "Anda salah jurusan" . PHP_EOL;
// }
