<?php

$nilai = 56;

if ($nilai >= 75 && $nilai <= 100) {
    echo "nilai anda $nilai, anda lulus";
} elseif ($nilai >= 0 && $nilai < 75) {
    echo "nilai anda $nilai, anda tidak lulus";
} else {
    echo "nilai anda $nilai, tidak ada ketentuan nilai seperti ini";
}

echo "<hr>";

if ($nilai >= 91 && $nilai <= 100) :
    echo "nilai anda $nilai, nilai anda A";
elseif ($nilai >= 83 && $nilai < 91) :
    echo "nilai anda $nilai, nlai anda B";
elseif ($nilai >= 75 && $nilai < 83) :
    echo "nilai anda $nilai, nilai anda C";
elseif ($nilai >= 0 && $nilai < 75) :
    echo "nilai anda $nilai, nilai anda D";
else :
    echo "nilai anda $nilai, tidak ada ketentuan nilai seperti ini";
endif;
                                                                                               
echo "<hr>";

$hasil = "E";

switch ($hasil) {
    case 'A':
        echo "nilai anda $hasil, nilai anda istimewa";
        break;
    case 'B':
        echo "nilai anda $hasil, nilai anda baik";
        break;
    case 'C':
        echo "nilai anda $hasil, nilai anda cukup";
        break;
    case 'D':
        echo "nilai anda $hasil, nilai anda kurang";
        break;
    default:
        echo "nilai anda $hasil, Tidak ada ketentuan nilai seperti ini";
        break;
}