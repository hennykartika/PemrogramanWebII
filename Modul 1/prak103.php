<?php
// Deklarasi variabel suhu dalam Celcius
$celcius = 37.841;

// Konversi suhu dari Celcius ke Fahrenheit
$fahrenheit = round(($celcius * 9/5) + 32, 4);

// Konversi suhu dari Celcius ke Reamur
$reamur = round($celcius * 4/5, 4);

// Konversi suhu dari Celcius ke Kelvin
$kelvin = round($celcius + 273.15, 4);

// Tampilkan hasil konversi suhu
echo "Fahrenheit (F) = " . $fahrenheit . "<br>";
echo "Reamur (R) = " . $reamur . "<br>";
echo "Kelvin (K) = " . $kelvin . "<br>";
?>
