<?php

function getNumOfUniqueCharacters($str, $n): int
{
    $count = 0;
    $arr = array_unique(str_split(strtolower($str)));
    foreach ($arr as $item) {

        if (substr_count($str, $item) >= $n) {
            $count++;
        }

    }
    return $count;

}

echo getNumOfUniqueCharacters("Alabama11115555222333344444222666688877779999yyyy", 4) . PHP_EOL;


function carry(array $arr): int
{
    $count = 0;
    $arr_str_numbers = [];
    foreach ($arr as $item) {
        $arr_str_numbers[] = array_reverse(str_split($item));
    }

    usort($arr_str_numbers, function ($a, $b) {
        if (count($a) == count($b)) {
            return 0;
        }

        return (count($a) > count($b) ? -1 : +1);

    });
    $x_size = count($arr_str_numbers[0]);
    $y_size = count($arr_str_numbers);
    $matrix = [];
    $x_i = 0;

    for ($y = $y_size - 1; $y >= 0; $y--) {

        for ($x = 0; $x <= $x_size - 1; $x++) {

            if (isset($arr_str_numbers[$y][$x])) {
                $matrix[$x][$y] = (int)$arr_str_numbers[$y][$x];
            } else {
                $matrix[$x][$y] = 0;
            }

        }
        $x_i++;
    }

//    foreach ($matrix as $mat) {
//        echo PHP_EOL;
//        foreach ($mat as $value) {
//            echo " " . $value;
//        }
//    }
//    echo PHP_EOL;

    $temp = 0;
    foreach ($matrix as $item) {
        if (array_sum($item) + $temp > 9) {
            $count++;
        } else {
            $temp = 0;
        }
    }


    return $count;


}

echo carry([1111111, 5555555, 12345678, 8524585245, 25254585245]).PHP_EOL;