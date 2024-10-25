<?php
function hitungKelilingPersegiPanjang($panjang, $lebar) {
    return 2 * ($panjang + $lebar);
}


$panjang = 32;
$lebar = 64;
$keliling = hitungKelilingPersegiPanjang($panjang, $lebar);

echo "Keliling persegi panjang dengan panjang $panjang dan lebar $lebar adalah $keliling";
?>
