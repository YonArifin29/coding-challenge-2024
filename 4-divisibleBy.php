<?php
// https://www.codewars.com/kata/55edaba99da3a9c84000003b/train/php
// function divisibleBy($numbers, $divisor)
// {
//     $result = [];
//     foreach ($numbers as $number) {
//         if ($number % $divisor == 0) {
//             array_push($result, $number);
//         }
//     }
//     return $result;
// }

function divisibleBy($numbers, $divisor)
{
    return array_values(array_filter($numbers, fn ($number) => $number % $divisor == 0));
}


var_dump(divisibleBy([1, 2, 3, 4, 5, 6], 2));
