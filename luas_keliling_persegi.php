<?php
function hitungLuasPersegi($sisi) {
    return $sisi * $sisi;
}

function hitungKelilingPersegi($sisi) {
    return 4 * $sisi;
}

$sisi = 64;
$luas = hitungLuasPersegi($sisi);
$keliling = hitungKelilingPersegi($sisi);

echo "Luas persegi dengan sisi $sisi adalah $luas<br>";
echo "Keliling persegi dengan sisi $sisi adalah $keliling";
?>
