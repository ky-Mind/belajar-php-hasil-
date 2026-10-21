<?php

//number

// === 1. INTEGER (Bilangan Bulat) ===

// Desimal (Basis 10) - Angka normal
$desimal = 1234;
echo "Desimal: ";
var_dump($desimal);
echo "\n";

// Oktal (Basis 8) - Diawali dengan angka 0
$oktal = 01234;
echo "Oktal: ";
var_dump($oktal);
echo "\n";

// Heksadesimal (Basis 16) - Diawali dengan 0x
$heksadesimal = 0x1A;
echo "Heksadesimal: ";
var_dump($heksadesimal);
echo "\n";

// Biner (Basis 2) - Diawali dengan 0b
$biner = 0b111111;
echo "Biner: ";
var_dump($biner);
echo "\n";

// Underscore pada angka (Pemisah agar mudah dibaca)
$angkaPanjang = 1_241_241_241;
echo "Underscore di Integer: ";
var_dump($angkaPanjang);
echo "\n";


// === 2. FLOATING POINT (Bilangan Pecahan / Desimal) ===

// Floating Point standar
$floatStandar = 1.234;
echo "Floating Point Standar: ";
var_dump($floatStandar);
echo "\n";

// E-notation Positif (Eksponensial) -> 1.2 x 10^3
$floatEPlus = 1.2e3;
echo "Floating Point E-notation Plus: ";
var_dump($floatEPlus);
echo "\n";

// E-notation Negatif -> 7 x 0.001
$floatEMinus = 7e-3;
echo "Floating Point E-notation Minus: ";
var_dump($floatEMinus);
echo "\n";

// Underscore pada Floating Point
$floatUnderscore = 1_234.567;
echo "Underscore di Floating Point: ";
var_dump($floatUnderscore);
?>