<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!--Գրել ծրագիր, որը հաշվում է 3x3 չափանի զանգվածի՝
ա.առաջին տողի էլեմենտների գումարը,
բ.վերջին տողի էլեմենտների գումարը,
գ.առաջին սյան էլեմենտների գումարը,
դ.վերջին սյան էլեմենտների գումարը,
ե.գլխավոր անկյունագծի էլեմենտների գումարը,-->
<table border="1">
    <?php
        $matrix = [[12,5,7],[1,0,14], [3,8,11]];
        $sum1 = 0;
        $sum2 = 0;
        $sum3 = 0;
        $sum4 = 0;
        $sum5 = 0;

        for($i = 0; $i < 3; $i++){
            echo "<tr>";
            for($j = 0; $j < 3; $j++){
                echo "<td>".$matrix[$i][$j]."</td>";
            }
            echo "</tr>";
        }

        /*ա.առաջին տողի էլեմենտների գումարը,*/
        for($i = 0; $i < 3; $i++){
            $sum1 = $sum1 + $matrix[0][$i];
        }
        echo $sum1."<br>";

        /*բ.վերջին տողի էլեմենտների գումարը,*/

        for($i = 0; $i < 3; $i++){
            $sum2 = $sum2 + $matrix[$i][$i];
        }
        echo $sum2."<br>";

        /*գ.առաջին սյան էլեմենտների գումարը,*/
        for($i = 0; $i < 3; $i++){
            $sum3 = $sum3 + $matrix[$i][0];
        }
        echo $sum3."<br>";

        /*դ.վերջին սյան էլեմենտների գումարը,*/
        for($i = 0; $i < 3; $i++){
            $sum4 = $sum4 + $matrix[$i][2];
        }
        echo $sum4."<br>";

        /*ե.գլխավոր անկյունագծի էլեմենտների գումարը*/
        for($i = 0; $i < 3; $i++){
            for($j = 0; $j < 3; $j++){
                if($i == $j){
                    $sum5 = $sum5 + $matrix[$i][$i];
                }
            }
        }
        echo $sum5."<br>";

    ?>


</table>

</body>
</html>