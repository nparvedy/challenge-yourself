<?php 
$allLongestString = function($array){
    $taille = 0;
    $tableau = [];
    for ($i = 0; $i < count($array); $i++){
        if (count($array) >= 1 && count($array) <= 10 && strlen($array[$i]) >= 1 && strlen($array[$i]) <= 10 ){
            if ($taille <= strlen($array[$i])){
                $taille = strlen($array[$i]);
                array_push($tableau, "$array[$i]");
            }
        
        }else {
            return "err\n";
        }
    }
    for ($i = 0; $i < count($tableau); $i++){
        if ($taille > strlen($tableau[$i])){
            unset($tableau[$i]);
        }
    }
    return $tableau;
};

?>

