<?php

echo "<title>Latihan Looping</title>";

echo "Mulai <br>";
$nilai_angkot = 1;
while ($nilai_angkot <= 10) {
    echo "Angkot no. $nilai_angkot beroperasi dengan baik. <br>";

    $nilai_angkot++; // sama aja kayak += 1
}
echo "Selesai <br>";

echo "<hr>";

echo "Mulai <br>";
for ($nilai_angkot = 1; $nilai_angkot <= 10; $nilai_angkot++) {
    echo "Hello world $nilai_angkot kali <br>";
}
echo "selesai <br>";