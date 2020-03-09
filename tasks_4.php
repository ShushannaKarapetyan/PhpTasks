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
        <!--Դասավորել աճման կարգով-->
    <?php

        $a = array(12,2,95,10,5);
        $index = 0;
        for($i = 0; $i < count($a); $i ++) {  // cikl zangvaci vrayov
            for($j = 0; $j < count($a)-1; $j ++){ // cikl naxord tarri hamar
                if($a[$j] > $a[$j+1]) { // hamematutyun hajordi het
                    $index = $a[$j+1]; // vercnel hajord@
                    $a[$j+1] = $a[$j]; // veragrel naxord@
                    $a[$j] = $index; // veragrel $indexin
                }
            }
        }
        for($k = 0; $k < count($a); $k ++){
            echo $a[$k]."<br>";
        }

    ?>

       <!-- Հաշվել միջին թվաբանականը-->
       <?php
           $a = array(12,2,95,10,5);
            $sum = 0;
            for($i = 0; $i < count($a); $i++){
                $sum = $sum + $a[$i];
            }
            $avg = $sum / count($a);
            echo $avg;
        ?>

        <!-- Գրել ծրագիր, որը ստուգում է, թե միաչափ  զանգվածում կան արդյոք կրկնվող տարրեր:-->
        <?php
            $a = array(12, 2, 95, 10, 5, 2, 7, 12, 95);
            $count = 0;
            for($i = 0; $i < count($a); $i++){ // cikl zangvaci vrayov
               for($j = 0; $j < $i; $j++){  // cikl minchev konkret index@
                   if($a[$i] == $a[$j]){  // hamematutyun
                       $count++;
                   }
               }
            }
            echo $count;
        ?>




</body>
</html>