<?php

function getNumOfUniqueCharacters($str, $n)
{
    $count = 0;
    $str = strtolower($str);
    $arr = array_unique(str_split($str));
    foreach ($arr as $item) {

        if (substr_count($str, $item) >= $n) {
            $count++;
        }

    }
    return $count;

}

echo getNumOfUniqueCharacters("Alabama", 3);