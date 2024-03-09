<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="1.css">
</head>
<body>
    <div class="container">
        <h2>12 ელემენტიანი მასივი</h2>
        <form action="" method="post">
            <label for="x">შეიყვანე რიცხვი X: </label>
            <input type="number" name="x" id="x" required>
            <br>
            <input type="submit" value="Submit">
        </form>


        <?php
        if(isset($_POST['x'])){
            $array = array();

            for($i=0; $i<12; $i++){
                $array[$i] = rand(10, 100);
            }

            $x=$_POST['x'];
            $naklebi = 0;
            $meti = 0;

            foreach($array as $element){
                if($element < $x){
                    $naklebi++;
                }elseif($element > $x){
                    $meti++;
                }
            }
            echo "<pre>";
            print_r($array);
            echo "</pre>";
            echo "ელემენტების რაოდენობა, რომლებიც ნაკლებია $x-ზე: $naklebi<br>";
            echo "ელემენტების რაოდენობა, რომლებიც მეტია $x-ზე: $meti<br>";
        }
        ?>

    </div>
</body>
</html>