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

        $number1 = 1;
        $number2 = 3;
        $number3 = 5;
        $number4 = 3;

        function add($number1, $number2){
            $resultat = $number1 + $number2;
            echo "<p>La somme de mes deux premiers nombres vaut : $resultat</p>";
        }

        add($number1, $number2);
        add($number3,$number4);

        $tableauNombre = [
            5,2,3,2,3
        ];

        function returnOfAllNumber($tableauNombre){
            echo array_sum($tableauNombre);
        }

        returnOfAllNumber($tableauNombre);
    ?>
</body>
</html>