<?php

$hexCheckT = ['d', 'c', '1', '4', '3', 'c'];
$hexCheckF = ['d', 'm', '1', '4', '3', 'c'];

function hexDrinker(array $hexCheck): bool
{
    if (count($hexCheck) != 6) {
        return false;
    }

    foreach ($hexCheck as $item) {
        if (!in_array($item, ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f'])) {
            return false;
        }
    }
    return true;
}

echo '<p>' . hexDrinker($hexCheckF) . '</p>';
