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
    <table class="table" border="1">
        <tr>
            <td>Number</td>
            <td>Square of number</td>
        </tr>
        <?php
            for($i = 1; $i < 11; $i++) {
                echo "<tr>
                     <td>".$i."</td>
                     <td>".pow($i,2)."</td>
                </tr>";


            }
        ?>
    </table>

   <?php
        function numbers($number){
            $array = array('Monday' => 1, 'Tuesday' => 2, 'Wednesday' => 3, 'Thursday' => 4, 'Friday' => 5, 'Saturday' => 6, 'Sunday' => 7);
            foreach ($array as $key => $value) {
                if($number == $value){
                    echo $key;
                }
            }
            if($number < 1 || $number > 7){
                echo "This is incorrect number !";
            }
        }
        numbers(6);  // orinak

    ?>

    <?php
        function pythagorean_numbers($number1, $number2, $number3){
            if (pow($number1,2) == pow($number2,2) + pow($number3,2)){
                echo "The numbers are pythagorean";
            } elseif (pow($number2,2) == pow($number3,2) + pow($number1,2)){
                echo "The numbers are pythagorean";
            } elseif (pow($number3,2) == pow($number2,2) + pow($number1,2)){
                echo "The numbers are pythagorean";
            } else {
                echo "The numbers aren't pythagorean";
            }

        }
        pythagorean_numbers(7,3,4);

    ?>


</body>
</html>