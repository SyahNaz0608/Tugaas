<?php
// digunakan dalam array
$teman = ["syah", "kepin", "pasya", "egi", "akbar", "athar"];
sort($teman);
foreach ($teman as $no => $b) {
    echo ++$no. " . $b <br>";
}