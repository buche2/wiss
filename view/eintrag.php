<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title></title>
	
	<style type="text/css">
		body {
			background-color: rgb(230, 230, 230);
		}

		.form {
			position: fixed;
			width: 90%;
			margin: 5%;
		}

		#eintrag {
			position: fixed;
		}
	</style>
</head>
<body>
	<h1>Schreiben sie einen neuen Eintrag</h1>
	<div class="form">
		<form action="" method="" onsubmit="">
			<label for="titel">Titel:</label>
			<input type="text" name="titel" id="titel" required width="">
			<br><br>
			<label for="kategorie">Kategorie:</label>
			<input type="text" name="kategorie" id="kat"
			required width="">
			<br><br>
			<label for="eintrag">Eintrag:</label>
			<input type="text" name="eintrag" id="eintrag" required width="" height="">
		</form>
	</div>
</body>
</html>