<?php

$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

for ($i = 0; $i < count($data); $i++) {
    fizzbuzz($data[$i]);
};

function fizzbuzz($data)
{
    if ($data == 5 && $data == 11) {
        echo "FizzBuzz - $data - $data" . PHP_EOL;
    }
    if ($data == 5) {
        echo "Fizz - $data" . PHP_EOL;
    }
    if ($data == 11) {
        echo "Buzz - $data" . PHP_EOL;
    }
};