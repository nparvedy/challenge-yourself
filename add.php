<?php 

    $add = function(){
        $resultat = 0;
        foreach(func_get_args() as $nombre){
            if (is_int($nombre) >= -100 && is_int($nombre) <= 1000){
                $resultat = $resultat + $nombre;
            }else{
                return false;
            }
        }
        return $resultat;
    };



    