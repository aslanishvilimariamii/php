<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="5.css">
</head>
<body>
    <div class="container">
        <h1>PHP Form Validation Example</h1>
        <h4>* required field</h4>
        <form action="" method="post">
            <label for="name">Name: </label>
            <input type="text"  id="name" name="name" required ><span class="required">*</span>
            <br>
            
            <label for="email">E-mail: </label>
            <input type="email"  id="email" name="email" required><span class="required">*</span>
            <br>

            <label for="website">Website: </label>
            <input type="text"  id="website" name="website">
            <br>

            <label for="comment">Comment: </label>
            <textarea  id="comment" name="comment" rows="5"></textarea>
            <br>

            <label for="gender">Gender: </label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><span class="required">*</span>
            <br><br>

            <input type="submit" value="Submit">

        </form>
        <h2>Your Input:</h2>


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<table border='1px'>";
            echo "<tr><th>Field</th><th>Value</th></tr>";
            foreach ($_POST as $key => $value) {
                echo "<tr><td>".ucwords($key)."</td><td>".$value."</td></tr>";
            }
            echo "</table>";
        }
        ?>
        
    </div>
</body>
</html>