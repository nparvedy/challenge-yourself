<?php 

    $add = function(){
        $resultat = 0;
        foreach(func_get_args() as $nombre){
            if ($nombre >= -100 && $nombre <= 1000){
                $resultat = $resultat + $nombre;
            }
        }
        return $resultat;
    };


    