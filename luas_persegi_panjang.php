<?php
function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}


$panjang = 32;
$lebar = 64;
$luas = hitungLuasPersegiPanjang($panjang, $lebar);

echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah $luas";
?>
