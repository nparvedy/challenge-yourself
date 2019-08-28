<?php 
    $add = function(){
        $resultat = 0;
        foreach (func_get_args($resultat) as $value){

            if ($value >= - 100 && $value <= 1000){
                $resultat += $value;
            }
        }
        echo $resultat;
    };

    $add(5,5,-300,2000,4,7);
?>
