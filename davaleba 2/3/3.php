<!DOCTYPE html>
<html>
<head>
	<title>Matrix Operations</title>
	<link rel="stylesheet" href="3.css">
</head>
<body>
	<div class="container">
	<table border="1">
		<?php
			// 6x5 მატრიცა, ელემენტებისთვის ინდექსების ჯამის მინიჭება
			$matrix = array();
			for ($i = 0; $i < 6; $i++) {
			    $row = array();
			    for ($j = 0; $j < 5; $j++) {
			        $sum = $i + $j;
			        array_push($row, $sum);
			    }
			    array_push($matrix, $row);
			}

			// მატრიცის გამოტანა ცხრილის სახით
			foreach ($matrix as $row) {
			    echo "<tr>";
			    foreach ($row as $element) {
			        echo "<td>" . $element . "</td>";
			    }
			    echo "</tr>";
			}
		?>
	</table>
	</div>
</body>
</html>
