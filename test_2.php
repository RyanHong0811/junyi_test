<?php

echo filter(15);

function filter($number) {
    $count = 0;
    for ($i = $number; $i > 0; $i--) { 
        if ($i%15 == 0 || ($i%3 != 0 && $i%5 != 0)) {
            $count++;
        } 
    }
    return $count;
}