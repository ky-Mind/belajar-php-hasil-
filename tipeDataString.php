<?php
$nama = "Hilmi";

// 1. Single Quote ('') & Double Quote ("")
echo 'Halo, $nama (Single Quote - variabel tidak terbaca)';
echo '<br>';
echo "Halo, $nama (Double Quote - variabel terbaca)";
echo '<br><br>';

// 2. Heredoc (<<<TAG) - Bisa membaca variabel & teks panjang multi-baris
echo <<<TEXT
Halo $nama,
Ini menggunakan Heredoc.
Variabel seperti nama kamu akan terbaca di sini!
TEXT;

echo '<br><br>';

// 3. Nowdoc (<<<'TAG') - Dicetak mentah, variabel TIDAK terbaca
echo <<<'TEXT'
Halo $nama,
Ini menggunakan Nowdoc.
Variabel seperti nama kamu TIDAK AKAN terbaca di sini!
TEXT;
?>