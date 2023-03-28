<!DOCTYPE html>
<html>
<head>
	<title>Radio-Button und Multiplikation</title>
</head>
<body>
	<h2>Wähle eine Zahl aus:</h2>
	<form method="post" action="">
		<input type="radio" name="zahl" value="5"> 5<br>
		<input type="radio" name="zahl" value="10"> 10<br>
		<input type="radio" name="zahl" value="20"> 20<br>
			<br>
		<label for="multiplikator">Multiplikator:</label>
		
			<br>
		<input type="submit" name="submit" value="Berechnen">
	</form>
	<?php
	$multiplikator = 100
	if(isset($_POST['submit'])){
		$zahl = $_POST['zahl'];
		$multiplikator = $_POST['multiplikator'];
		$ergebnis = $zahl + $multiplikator;
		echo "Das Ergebnis von $zahl - $multiplikator ist: $ergebnis";
	}
	?>
</body>
</html>