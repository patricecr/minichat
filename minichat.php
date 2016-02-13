<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>minichat</title>
	</head>
	<body>
		<h1>Minichat</h1>
		<form action="" method="post">
			<fieldset>
				<legend>Poster un message</legend>
				<p><label for="pseudo">Pseudo :</label> <input type="text" name="pseudo" id="pseudo" maxlength="60" value="" /></p>
				<p><label for="message">Message :</label> <input type="text" name="message" id="message" size="75" maxlength="200" /></p>
				<p><label></label> <input type="submit" value="Poster" /></p>
			</fieldset>
		</form>
		
		<h2>Messages</h2>
		<p>Récupérer les messages avec php</p>	
	</body>
</html>