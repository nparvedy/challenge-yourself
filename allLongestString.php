<?php 
$allLongestString = function($array){
    $tableau = [];
    for ($i = 0; $i < count($array); $i++){
        if (strlen($array[$i]) >= 1 && strlen($array[$i]) <= 10){
            if (strlen($array[$i]) >= 3 && strlen($array[$i]) <= 10){
                array_push($tableau, "$array[$i]");
            }
        }else{
            return "err\n";
        }
    }
    return $tableau;
};

?>


