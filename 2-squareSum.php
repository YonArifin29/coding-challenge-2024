<?php
// https://www.codewars.com/kata/515e271a311df0350d00000f/train/php

// function square_sum($numbers): int
// {
//     $result = 0;
//     foreach ($numbers as $number) {
//         $result += $number ** 2;
//     }
//     return $result;
// }

function square_sum($numbers): int
{
    return array_sum(array_map(fn ($number) => $number ** 2, $numbers));
}

echo square_sum([0, 3, 4, 5]);
