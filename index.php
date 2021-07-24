<?php

function getNumOfUniqueCharacters($str, $n):int
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

//echo getNumOfUniqueCharacters("Alabama11115555222333344444222666688877779999yyyy", 4).PHP_EOL;



function carry(array $arr):int{
$count = 0;
    $arr_str_numbers = [];
    foreach ($arr as $item){
        $arr_str_numbers[] = str_split($item);
    }

        $size=count($arr_str_numbers[0]);
    $temp = 0;
        for($i=$size;$i>=0;$i--){

            if(isset($arr_str_numbers[0][$i],$arr_str_numbers[1][$i])){

                if($arr_str_numbers[0][$i]+$arr_str_numbers[1][$i]+$temp>9){
                $temp=1;
          $count++;
        }else{
                    $temp = 0;
                }
            }



        }
    return $count;


}

echo carry([255,99999999]).PHP_EOL;