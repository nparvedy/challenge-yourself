<?php 
$tableau = ["aba", "aa", "ad", "vcd", "aba"];
$allLongestString = function($array){
    for ($i = 0; $i < count($array); $i++){
        if (strlen($array[$i]) >= 2){
            unset($array[$i]);
        }else {
            return "err\n";
        }
    }
    return $array;
};

$allLongestString($tableau);
?>

