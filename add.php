<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    /* $add = function($premierNombre, $deuxiemeNombre){
           if ($premierNombre >= - 100 && $premierNombre <= 1000 && $deuxiemeNombre >= - 100 && $deuxiemeNombre <= 1000){
                $resultat = $premierNombre + $deuxiemeNombre;
                echo $resultat;
            }else {
                echo "err\n";
            }
        };*/
        $tableauNombre = [5,3,-150,2,5,7000];
        echo "Le tableau sans vérification : <br />";
        print_r($tableauNombre);
        

        $addTableau = function($tableauNombre){
            for ($i = 0; $i < count($tableauNombre); $i++){
                if ($tableauNombre[$i] >= - 100 && $tableauNombre[$i] <= 1000){
                    $newTableauNombre[$i] = $tableauNombre[$i];
                    $resultat = array_sum($newTableauNombre);
                    ?><p id="erreur">
                    <?php
                    echo "<style>#erreur{color:green;}</style>Le chiffre $tableauNombre[$i] répond à la condition";
                    ?>
                    </p>
                    <?php
                }else {
                    echo "<style>#right{color:red;}</style><p id='right'>Le nombre $tableauNombre[$i] ne correspond pas à la condition</p>";
                }
            }
            echo "La somme des nombres vérifier par la condition '-100 ≤ param1 ≤ 1000' vaut : $resultat";
         };
 

       // $add(1,2);
        $addTableau($tableauNombre);
    ?>
</body>
</html>