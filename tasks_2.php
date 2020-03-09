<!doctype html>
<html lang>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   <!-- --><?php
/*        function simple_number($number){
            $count = 0;
            for($i = 1; $i <= $number; $i++){
                if($number % $i == 0){
                    $count++;
                }
            }
            if($count > 2){
                echo "The number isn't simple! ". $count;
            } else if($count == 2){    // tiv@ parz e, ete uni 2 bajanarar, inq@ ev 1-@
                echo "The number is simple ";
            }
        }
        simple_number(18);  // 1,2,3,6,9,18

    */?>


   <!--Գտնել 1-ից մինչև 500 միջակայքում գտնվող պարզ թվերի քանակը:-->


   <?php

       function simple_numbers($numbers){
           $count2 = 0;
           for($i = 1; $i <= $numbers; $i++){  // 1-500 ciklov
               $count1 = 0;
               for($j = 1; $j <= $i; $j++){ // 1-500 tver@ hertov vercnel, minchev ayd tiv@ cikl pttvel
                   if($i % $j == 0){  // ete bajanvum e minchev irenexac tvi, qanak avelacnel
                       $count1++;
                   }
               }
               if($count1 == 2){  // stugel bajanararneri qanak@
                   $count2++;
               }
           }
           echo $count2;
       }
       simple_numbers(500);

   ?>

<!--Գրել ծրագիր, որը հաշվում է ներմուծված թվի թվանշանների քանակը և գումարը:
-->

   <?php
/*    function number($number){
        $count = strlen($number);
        $y= 0 ;
        while($number !=0 ){ // qani der 0 che, bajanel 10-i
            $c = intval($number / 10); //1415
            $b = $number - $c * 10;    //mnacord@ ` 6
            $number = $c; //1415
            $y = $y + $b;
        }
        echo "Count is {$count} and sum is {$y}";
    }
   number(14156);

   */?>

   <?php
/*   function number($number){
       $spl = str_split($number);
       $count_numbers = count($spl);
       $sum = 0;
       for($index = 0; $index < count($spl); $index++){
           $sum = $sum + $spl[$index];
       }
       echo "Count of numbers is {$count_numbers} and sum is {$sum}";
   }
   number(1366);
   */?>




  <!-- Գրել ծրագիր, որը դուրս է բերում y=3x2-4x-7 ֆունկցիայի արժեքների աղյուսակը [-5,5] միջակայքում 0.5 քայլով:-->

   <?php
/*         $count = 0;
         $D = 16 + 4 * 3 * 7;  // armat@ 10
         $x1 = (4 + 10) / 6;  //  7/3
         $x2 = (4 - 10) / 6;  // -1

        //functian uni 2 arjeq, hashvenq u stugenq [-5,5] mijakayqum

         $y1 = 3 * pow($x1,2) - 4 * $x1 - 7; // 0
         $y2 = 3 * pow($x2,2) - 4 * $x2 - 7; // 0

        for($i = -5; $i < 5; $i+=0.5){
            if($y1 == $i || $y2 == $i){
                $count ++;
            }
        }
        echo $count;

   */?>



</body>
</html>