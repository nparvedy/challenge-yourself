<?php 
 
    $image = ["ab", "abc","abcd", "abcde"];

    $addBorder = function($image){
        $taille = 0;
        $asterix = "*";
        for ($i = 0; $i < count($image); $i++){
            if ($taille < strlen($image[$i])){
                $taille = strlen($image[$i]);
                $asterix = str_repeat("*", $taille);
            }

        }
        echo str_pad($asterix, $taille + 2 , "*", STR_PAD_BOTH);
        echo '<br />';
        for ($i = 0; $i < count($image); $i++){
            echo "*";
            echo $image[$i];
            echo str_repeat("&nbsp;", ($taille * 2) - (strlen($image[$i]) * 2) );
            echo "*";
            echo "<br />";
        }
        echo str_pad($asterix, $taille + 2 , "*", STR_PAD_BOTH);
        
    };

    $addBorder($image);
?>

<!-- strlen($image[$i]) >= 1 && strlen($image[$i]) <= 5 -->

