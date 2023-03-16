<?php
// Deklarasi parameter awal
$jarijari = 4.2; // meter
$tinggi = 5.4; // meter

// Menghitung volume kerucut
$volume_kerucut = 1/3 * pi() * pow($jarijari, 2) * $tinggi;

// Menampilkan hasil perhitungan dengan 3 desimal dibelakang koma
echo "Jadi Volume Kerucut adalah " . number_format($volume_kerucut, 3) . " m<sup>3</sup><br>";

?>
