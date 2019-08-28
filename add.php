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

        function add($premierNombre, $deuxiemeNombre){
           if ($premierNombre >= - 100 && $premierNombre <= 1000 && $deuxiemeNombre >= - 100 && $deuxiemeNombre){
                $resultat = $premierNombre + $deuxiemeNombre;
                echo $resultat;
            }else {
                echo "err\n";
            }
        }

        add(1,3);
    ?>
</body>
</html>