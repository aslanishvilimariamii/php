<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 3</title>
    <link rel="stylesheet" href="3.css">
</head>
<body>
    <h2>Test</h2>
    <form method="POST">
        <h3>Test Questions</h3>
        <ol>
            <li>
                <label for="test1">Test 1: What is the capital of France?</label><br>
                <input type="radio" name="test1" value="Paris" required> Paris <br>
                <input type="radio" name="test1" value="London"> London <br>
                <input type="radio" name="test1" value="Berlin"> Berlin <br>
                <input type="radio" name="test1" value="Rome"> Rome <br>
            </li>
            <li>
                <label for="test2">Test 2:  Who is the president of the United States?</label><br>
                <input type="radio" name="test2" value="Joe Biden" required> Joe Biden <br>
                <input type="radio" name="test2" value="Donald Trump"> Donald Trump <br>
                <input type="radio" name="test2" value="Barack Obama"> Barack Obama <br>
                <input type="radio" name="test2" value="George Washington"> George Washington <br>
            </li>
            <li>
                <label for="test3">Test 3: What is the chemical symbol for water?</label><br>
                <input type="radio" name="test3" value="H2O" required> H2O <br>
                <input type="radio" name="test3" value="CO2"> CO2 <br>
                <input type="radio" name="test3" value="O2"> O2 <br>
                <input type="radio" name="test3" value="HCl"> HCl <br>
            </li>
        </ol>
        <h3>Test Questions</h3>
        <ol start="4">
            <li>
                <label for="open1">Open 1: What is the largest planet in our solar system?</label><br>
                <input type="text" name="open1" required>
            </li>
            <li>
                <label for="open2">Open 2: What is the chemical formula for table salt?</label><br>
                <input type="text" name="open2" required>
            </li>
        </ol>
        <button type="submit">Submit</button>
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $correct_answers = 0;

        if ($_POST['test1'] == 'Paris') $correct_answers++;
        if ($_POST['test2'] == 'Joe Biden') $correct_answers++;
        if ($_POST['test3'] == 'H2O') $correct_answers++;

        if ($_POST['open1'] == 'Jupiter') $correct_answers++;
        if ($_POST['open2'] == 'NaCl' || $_POST['open2'] == 'salt') $correct_answers++;

        echo "<h3>Results</h3>";
        echo "<p>Number of correct answers: $correct_answers</p>";
    }
    ?>

</body>
</html>