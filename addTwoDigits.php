<?php 
phpinfo();
die();
?>
<?php 
$addTwoDigits = function($nombreEntier){
    if (is_int($nombreEntier) && $nombreEntier >= 10 && $nombreEntier <= 99){
        $nombreEntier  = array_map('intval', str_split($nombreEntier));
        $nombreEntier = array_sum($nombreEntier);
        return $nombreEntier;
    }else {
        return "err\n";
    }
};
?>