<?php
function hitungKelilingLingkaran($jariJari) {
    return 2 * pi() * $jariJari;
}

$jariJari = 7;
$keliling = hitungKelilingLingkaran($jariJari);

echo "Keliling lingkaran dengan jari-jari $jariJari adalah $keliling";
?>
