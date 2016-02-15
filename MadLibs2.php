<!doctype html>

<html>
	<head>
		<title>Mad Libs 2</title>
		<link rel="stylesheet" href="MadSheet.css" type="text/css">
	</head>

	<body>
		<h1>Mad Libs</h1>
			<ul>
				<li><a href="http://localhost/Mad lips/MadLibs.php">Er heerst paniek...</a></li>
				<li><a href="http://localhost/Mad lips/Onkunde.php">Onkunde</a></li>
			</ul>
		<div class="container">
			<p>Er heerst paniek in het koninkrijk <?php echo $_POST['country'] ?>. </p>
			<p>Koning <?php echo $_POST['person'] ?> is ten einde raad en als koning  <?php echo $_POST['person'] ?> ten einde raad is, 
			   dan roept hij zijn ten-einde-raadsheer <?php echo $_POST['teacher'] ?>.</p>
			<p>"<?php echo $_POST['teacher'] ?> ! Het is een ramp! Het is een schande!"</p>
			<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
			<p>"Mijn <?php echo $_POST['animal'] ?> is verdwenen! Zo maar, zonder waarschuwing.</p>
			<p>En ik had net <?php echo $_POST['toy'] ?> voor hem gekocht!"</p>
			<p>"Majesteit, uw <?php echo $_POST['animal'] ?> komt vast vanzelf weer terug?"</p>
			<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['activity'] ?> leren?"</p>
			<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST['money'] ?> voor gebruiken."</p>
			<p>"<?php echo $_POST['teacher'] ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
			<p>"<?php echo $_POST['favorite'] ?>, Sire."</p>
		</div>
	</body>
</html>