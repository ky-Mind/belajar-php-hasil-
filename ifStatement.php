<?php

$nilai= 70;
$absen = 70;

if ($nilai >= 80 && $absen >= 80 ){
    echo "Selamat, anda lulus dengan nilai A" . PHP_EOL;
} else if ($nilai >= 75 && $absen >= 75 ) {
    echo "Selamat, anda lulus dengan nilai B" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70 ) {
    echo "Selamat, anda lulus dengan nilai c" . PHP_EOL;
} else {
    echo "Anda Gagal, Coba lagi Tahun Depan" . PHP_EOL;
}

#alternatif syintax if statement


if ($nilai >= 80 && $absen >= 80 ):
    echo "Selamat, anda lulus dengan nilai A" . PHP_EOL;
elseif ($nilai >= 75 && $absen >= 75 ) :
    echo "Selamat, anda lulus dengan nilai B" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70 ) :
    echo "Selamat, anda lulus dengan nilai c" . PHP_EOL;
else :
    echo "Anda Gagal, Coba lagi Tahun Depan" . PHP_EOL;
endif;