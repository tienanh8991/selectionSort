<?php
$array = [1, 9, 4.5, 6.6, 5.7, -4.5];

function selectionSort($list)
{
    for ($i = 0 ; $i < count($list) - 1 ; $i++){
        $min = $i;
        for ($j = $i + 1 ; $j < count($list) ; $j++){
            if ($list[$j] < $list[$min]){
                $min = $j;
            }
        }
        $temp = $list[$min];
        $list[$min] = $list[$i];
        $list[$i] = $temp;
    }
    return $list;
}

var_dump(selectionSort($array));