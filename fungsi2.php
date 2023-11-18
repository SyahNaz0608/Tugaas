<?php
function luaspersegi($s)
{
    $luas = $s * $s;
    return "Luas Persegi: $s x $s = $luas <br>";
}

function luasSegitiga($a, $t) 
{
    $luas = $a * $t / 2;
    return "luas Segitiga: $a x $t = $luas <br>";
}

function luasPersegiPanjang($p, $l)
{
    $luas = $p * $l;
    return "Luas persegi panjang: $p x $l = $luas <br>";
}

function luaslingkaran($r)
{
    $luas = 3.14 * $r * $r;
    return "luas lingkaran: 3.14 x $r x $r = $luas <br>";
}