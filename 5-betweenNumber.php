https://www.codewars.com/kata/55ecd718f46fba02e5000029/train/php
<!-- D 3 of 365 -->
<!-- lat 5 -->
<!-- 8 kyu-->

<?php

function between(int $a, int $b): array
{
    // $newArr = [];
    // for ($i = $a; $i <= $b; $i++) {
    //     array_push($newArr, $i);
    // }
    // return  $newArr;
    return range($a, $b);
}

echo var_dump(between(1, 4));
?>