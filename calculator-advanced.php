<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h2>Calculator</h2>
	<form method="POST" action="">
		<label>Value 1:</label>
		<input type="text" name="value1" required><br><br>
		<label>Value 2:</label>
		<input type="text" name="value2" required><br><br>

		<input type="radio" id="add" name="operation" value="add" required>
		<label for="add">Addition</label><br>

		<input type="radio" id="subtract" name="operation" value="subtract">
		<label for="subtract">Subtraction</label><br>

		<input type="radio" id="multiply" name="operation" value="multiply">
		<label for="multiply">Multiplication</label><br>

		<input type="radio" id="divide" name="operation" value="divide">
		<label for="divide">Division</label><br><br>

		<input type="submit" name="calculate" value="Calculate">
	</form>

	<?php
		if(isset($_POST['calculate'])){ //check whether the form is clicked and submitted
			$value1 = $_POST['value1'];
			$value2 = $_POST['value2'];
			$operation = $_POST['operation'];

			if(!is_numeric($value1) || !is_numeric($value2)){
				echo "Please enter valid numbers";
			}
			else{
				switch($operation){
					case "add":
						$result = $value1 + $value2;
						echo "The result of $value1 + $value2 is: $result";
						break;

					case "subtract":
						$result = $value1 - $value2;
						echo "The result of $value1 - $value2 is: $result";
						break;

					case "multiply":
						$result = $value1 * $value2;
						echo "The result of $value1 x $value2 is: $result";
						break;

					case "divide":
						if($value2 == 0){
							echo "Cannot divide by zero";
						}
						else{
							$result = $value1 / $value2;
							echo "The result of $value1 / $value2 is: $result";
						}
						break;

					default:
						echo "Please select an operation";
				}
			}
		}
	?>
</body>
</html>