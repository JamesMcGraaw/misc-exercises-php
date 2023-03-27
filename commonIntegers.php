<?php

$array1 = [1, 2, 3, 5, 8, 13];
$array2 = [1, 4, 8, 11];

function commonIntegers($array1, $array2)
{
    return $result = array_intersect($array1, $array2);
}

echo '<pre>';
print_r(commonIntegers($array1, $array2));
echo '</pre>';