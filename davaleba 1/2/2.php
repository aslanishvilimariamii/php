<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 2</title>
    <link rel="stylesheet" href="2.css">
</head>
<body>
    <div class="container">
    <h2>ნიშნების უწყისის ფორმა</h2>
    <form action="" method="POST">
        <label for="student_name">სტუდენტის სახელი:</label>
        <br>
        <input type="text" id="student_name" name="student_name" required>
        <br>

        <label for="student_last_name">სტუდენტის გვარი:</label>
        <br>
        <input type="text" id="student_last_name" name="student_last_name" required>
        <br>

        <label for="course">კურსი:</label>
        <br>
        <input type="text" id="course" name="course" required>
        <br>

        <label for="semester">სემესტრი:</label>
        <br>
        <input type="text" id="semester" name="semester" required>
        <br>

        <label for="study_course">სასწავლო კურსი:</label>
        <br>
        <input type="text" id="study_course" name="study_course" required>
        <br>

        <label for="mark">ქულა:</label>
        <br>
        <input type="number" id="mark" name="mark" required>
        <br>
        
        <label for="lecturer_name">ლექტორის სახელი:</label>
        <br>
        <input type="text" id="lecturer_name" name="lecturer_name" required>
        <br>
        
        <label for="lecturer_last_name">ლექტორის გვარი:</label>
        <br>
        <input type="text" id="lecturer_last_name" name="lecturer_last_name" required>
        <br>
        
        <label for="dean_name">დეკანის სახელი:</label>
        <br>
        <input type="text" id="dean_name" name="dean_name" required>
        <br>
        
        <label for="dean_last_name">დეკანის გვარი:</label>
        <br>
        <input type="text" id="dean_last_name" name="dean_last_name" required>
        <br>

        <button type="submit">Submit</button>
        
    </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
        $student_name = $_POST['student_name'];
        $student_last_name = $_POST['student_last_name'];
        $course = $_POST['course'];
        $semester = $_POST['semester'];
        $study_course = $_POST['study_course'];
        $mark = $_POST['mark'];
        $lecturer_name = $_POST['lecturer_name'];
        $lecturer_last_name = $_POST['lecturer_last_name'];
        $dean_name = $_POST['dean_name'];
        $dean_last_name = $_POST['dean_last_name'];

        function calculate_grade($received_mark) {
            if ($received_mark > 90) {
                return 'A';
            }elseif ($received_mark > 80) {
                return 'B';
            }elseif ($received_mark > 70) {
                return 'C';
            }elseif ($received_mark > 60) {
                return 'D';
            }elseif ($received_mark > 50) {
                return 'E';
            }else {
                return 'F';
            }
        }

        $grade = calculate_grade($mark);


        echo "<table>";
        echo "<tr><td>სტუდენტის სახელი</td><td>$student_name</td></tr>";
        echo "<tr><td>სტუდენტის გვარი</td><td>$student_last_name</td></tr>";
        echo "<tr><td>კურსი</td><td>$course</td></tr>";
        echo "<tr><td>სემესტრი</td><td>$semester</td></tr>";
        echo "<tr><td>სასწავლო კურსი</td><td>$study_course</td></tr>";
        echo "<tr><td>ქულა</td><td>$mark</td></tr>";
        echo "<tr><td>შეფასება</td><td>$grade</td></tr>";
        echo "<tr><td>ლექტორის სახელი</td><td>$lecturer_name</td></tr>";
        echo "<tr><td>ლექტორის გვარი</td><td>$lecturer_last_name</td></tr>";
        echo "<tr><td>დეკანის სახელი</td><td>$dean_name</td></tr>";
        echo "<tr><td>დეკანის გვარი</td><td>$dean_last_name</td></tr>";
        echo "</table>";

    }
    ?>

</body>
</html>