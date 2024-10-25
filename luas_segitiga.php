<?php
function hitungLuasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Contoh penggunaan
$alas = 32;
$tinggi = 64;
$luas = hitungLuasSegitiga($alas, $tinggi);

echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah $luas";
?>
