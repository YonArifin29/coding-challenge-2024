<?php
// https: //www.codewars.com/kata/56f69d9f9400f508fb000ba7/train/php

// function monkeyCount($n)
// {
//     $num_arr = [];
//     for ($i = 1; $i <= $n; $i++) {
//         array_push($num_arr, $i);
//     }
//     return $num_arr;
// }

function monkeyCount($n)
{
    return array_map(fn ($i) => $i, range(1, $n));
}

var_dump(monkeyCount(10));
