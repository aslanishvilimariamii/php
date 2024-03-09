<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="4.css">
</head>
<body>
    <div class="container">
        <?php
        $cars = array(
            array("Make"=>"Toyota", "Model"=>"Corolla", "Color"=>"White", "Mileage"=>24000, "Status"=>"Sold"),
            array("Make"=>"Toyota", "Model"=>"Camry", "Color"=>"Black", "Mileage"=>56000, "Status"=>"Available"),
            array("Make"=>"Honda", "Model"=>"Accord", "Color"=>"White", "Mileage"=>15000, "Status"=>"Sold")
        );

        
        echo "<table border='1'>";
        echo "<tr><th>Make</th><th>Model</th><th>Color</th><th>Mileage</th><th>Status</th></tr>";
        foreach ($cars as $car) {
            echo "<tr>";
            foreach ($car as $key => $value) {
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</div>
</body>
</html>