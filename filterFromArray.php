<?php

$array = [23, '', 'abcd', true, null, false, 0];

function filterFalsy($array)
{
    $trueArray = [];
    foreach ($array as $item) {
        if ($item != null && $item != false && $item != 0 && $item != '') {
            $trueArray[] = $item;
        }
    }
    return $trueArray;
}

echo '<pre>';
print_r(filterFalsy($array));
echo '</pre>';