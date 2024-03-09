<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 1</title>
    <link rel="stylesheet" href="1.css">

</head>
<body>
    <div class="container">
    <h2>სახელფასო უწყისის ფორმა</h2>

    <form action="" method="GET">
        <label for="first_name">სახელი: </label>
        <br>
        <input type="text" id="first_name" name="first_name" required>
        <br>

        <label for="last_name">გვარი: </label>
        <br>
        <input type="text" id="last_name" name="last_name" required>
        <br>

        <label for="position">თანამდებობა: </label>
        <br>
        <input type="text" id="position" name="position" required>
        <br>

        <label for="salary">ხელფასი: </label>
        <br>
        <input type="number" id="salary" name="salary" required>
        <br>

        <label for="income">საშემოსავლო (%): </label>
        <br>
        <input type="number" id="income" name="income"  value="20">
        <br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="GET") {
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];
        $position = $_GET['position'];
        $salary = $_GET['salary'];
        $income = isset($_GET['income']) ? $_GET['income'] : 20;
        
        $withheld_income = $salary * ($income/100);
        $accrued_salary = $salary - $withheld_income;
        
        echo "<hr>";
        echo "<table border='1'>";
        echo "<tr><td>სახელი</td><td>$first_name</td></tr>";
        echo "<tr><td>გვარი</td><td>$last_name</td></tr>";
        echo "<tr><td>თანამდებობა</td><td>$position</td></tr>";
        echo "<tr><td>ხელფასი</td><td>$salary</td></tr>";
        echo "<tr><td>საშემოსავლო (%)</td><td>$income</td></tr>";
        echo "<tr><td>დაკავებული შემოსავალი</td><td>$withheld_income</td></tr>";
        echo "<tr><td>დარიცხული ხელფასი</td><td>$accrued_salary</td></tr>";
        echo "</table>";
    }
    ?>
    </div>
</body>
</html>