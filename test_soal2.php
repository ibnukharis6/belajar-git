<?php

$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

for ($i = 0; $i < count($data); $i++) {
    if ($data[$i] < 0) {
        echo "tidak bisa di validasi sistem" . PHP_EOL;
    } else {
        echo "index ke $i adalah " . gettype($data[$i]) . " dengan data " . $data[$i] . PHP_EOL;
    }
}