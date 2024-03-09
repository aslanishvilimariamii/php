<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Operations</title>
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="number"], input[type="submit"] {
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: darkorchid;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: plum;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Matrix Operations</h2>
        <form method="post" action="">
            <label for="X">Enter a number (X):</label>
            <input type="number" name="X" id="X" required>
            <br>
            <input type="submit" value="Submit">
        </form>

        <?php
        // random numbers
        function generateRandomNumber() {
            return rand(10, 100);
        }

        // 4x4 matrix
        function generateMatrix() {
            $matrix = array();
            for ($i = 0; $i < 4; $i++) {
                $row = array();
                for ($j = 0; $j < 4; $j++) {
                    $row[] = generateRandomNumber();
                }
                $matrix[] = $row;
            }
            return $matrix;
        }

        // sum of digits
        function sumOfDigits($number) {
            $sum = 0;
            while ($number != 0) {
                $sum += $number % 10;
                $number = (int)($number / 10);
            }
            return $sum;
        }

      
        if(isset($_POST['X'])) {
            $matrix = generateMatrix();
            $X = $_POST['X'];
            $sum = 0;
            $product = 1;
            $sumOfDigitsTable = array();

            echo "<h3>Matrix:</h3>";
            echo "<table>";
            for ($i = 0; $i < 4; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 4; $j++) {
                    $element = $matrix[$i][$j];
                    echo "<td>$element</td>";
                    $sum += $element;
                    $product *= $element;
                    $sumOfDigitsTable[$i][$j] = sumOfDigits($element);
                }
                echo "</tr>";
            }
            echo "</table>";

            echo "<h3>Elements Above Main Diagonal:</h3>";
            echo "<table>";
            for ($i = 0; $i < 4; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 4; $j++) {
                    if ($j > $i) {
                        echo "<td>{$matrix[$i][$j]}</td>";
                    } else {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";

            // multiples of X 
            echo "<h3>Multiples of $X in the Matrix:</h3>";
            echo "<ul>";
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    if ($matrix[$i][$j] % $X == 0) {
                        echo "<li>{$matrix[$i][$j]}</li>";
                    }
                }
            }
            echo "</ul>";

            // sum, product, arithmetic mean, diagonal, and sum of digits
            echo "<h3>Sum of Elements: $sum</h3>";
            echo "<h3>Product of Elements: $product</h3>";
            echo "<h3>Arithmetic Mean: " . ($sum / 16) . "</h3>";
            echo "<h3>Diagonal Elements:</h3>";
            echo "<ul>";
            for ($i = 0; $i < 4; $i++) {
                echo "<li>{$matrix[$i][$i]}</li>";
            }
            echo "</ul>";
            echo "<h3>Sum of Digits of Each Element:</h3>";
            echo "<table>";
            for ($i = 0; $i < 4; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 4; $j++) {
                    echo "<td>{$sumOfDigitsTable[$i][$j]}</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>