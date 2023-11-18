<?php

echo "<title>Latihan loop</title>";

$no_angkot = 1;
$jmlh_angkot = 20;
$angkot_rusak = 5;

// Cukup main di tiga variabel ini aja ya

while ($no_angkot <= $jmlh_angkot - $angkot_rusak) {
    echo "Angkot no. $no_angkot beroperasi dengan baik. <br>";

    $no_angkot++; // sama aja kayak += 1
}

for ($no_angkot; $no_angkot <= $jmlh_angkot; $no_angkot++) {
    echo "angkot no $no_angkot sedang rusak. <br>";
}