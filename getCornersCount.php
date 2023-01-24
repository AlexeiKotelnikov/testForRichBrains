<?php

declare(strict_types=1);

function getCornersCount(string ...$shapeName): void
{
    $output = [];
    if ($shapeName == null) {
        $output[] = 'Ничего не введено';
    } else {
        foreach ($shapeName as $name) {
            if ($name == 'circle') {
                $output[] = $name . ' - 0';
            } elseif ($name == 'square') {
                $output[] = $name . ' - 4';
            } else {
                $output[] = $name . ' - not defined';
            }
        }
    }

    foreach ($output as $key) {
        echo $key;
        echo "\n";
    }
}