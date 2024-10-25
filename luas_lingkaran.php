<?php
function hitungLuasLingkaran($jariJari) {
    return pi() * $jariJari * $jariJari;
}

$jariJari = 7;
$luas = hitungLuasLingkaran($jariJari);

echo "Luas lingkaran dengan jari-jari $jariJari adalah $luas";
?>
