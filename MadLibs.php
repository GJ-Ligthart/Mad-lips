<html>
	<head>
		<title>Mad Libs</title>
		<link rel="stylesheet" href="MadSheet.css" type="text/css">
	</head>

	<body>
		<h1>Mad Libs</h1>	
			<ul>
				<li><a href="http://localhost/Mad lips/MadLibs.php">Er heerst paniek...</a></li>
				<li><a href="http://localhost/Mad lips/Onkunde.php">Onkunde</a></li>
			</ul>
		<div class="container">
			<h2>Er heerst paniek...</h2>
				<form method="post" action="MadLibs2.php">
				    <p>
				      <label>Welk dier zou je nooit als huisdier willen hebben?</label>
				      <input type="text" name="animal" />
				    </p>
				    
				    <p>
				      <label>Wie is de belangrijkste persoon in je leven?</label>
				      <input type="text" name="person" />
				    </p>
				    
				    <p>
				      <label>In welk land zou je graag willen wonen?</label>
				      <input type="text" name="country" />
				    </p>

					<p>
				      <label>Wat doe je als je je verveelt?</label>
				      <input type="text" name="activity" />
				    </p>

				    <p>
				      <label>Met welk speelgoed speelde je als kind het meest?</label>
				      <input type="text" name="toy" />
				    </p>

				    <p>
				      <label>Bij welke docent spijbel je het liefst?</label>
				      <input type="text" name="teacher" />
				    </p>

				    <p>
				      <label>Als je EUR 100.000,- had, wat zou je dan kopen?</label>
				      <input type="text" name="money" />
				    </p>

				    <p>
				      <label>Wat is je favoriete bezigheid?</label>
				      <input type="text" name="favorite" />
				    </p>

				    <p class="submit">
				      <label>&nbsp;</label>
				      <input type="submit" value="Versturen" />
				    </p>
			  	</form>
		</div>
	</body>
</html>