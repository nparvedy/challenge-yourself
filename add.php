<?php

$add = function(){
    $resultat = 0;
    foreach(func_get_args() as $nombre){
        if (is_int($nombre) && $nombre >= -100 && $nombre <= 1000){
            $resultat = $resultat + $nombre;
        }else{
            return false;
        }
    }
    return $resultat;
};

    ?>