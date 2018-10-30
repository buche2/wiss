<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title>Neuer Eintrag</title>
	
	<!-- Bootstrap link -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- <style type="text/css">
		body {
			background-color: rgb(230, 230, 230);
		}

		.form {
			position: fixed;
			width: 90%;
			margin: 5%;
		}

		#eintrag {
			position: fixed ;
		}
	</style> -->

</head>
<body>
	<h1>Schreiben sie einen neuen Eintrag</h1>
	<div class="form-group">
		<form action="forum.php" method="post" onsubmit="function insertEintrag();">	
	<div>
			<label for="titel">Titel:</label>
			<input type="text" class="form-control" name="titel" id="titel" required width="">
	</div>
	<div class="form-group">
			<label for="kategorie">Kategorie:</label>
			<input type="text" class="form-control" name="kategorie" id="kat"
			required width="">
	</div>
	<div class="form-group">
			<label for="eintrag">Eintrag:</label>
			<textarea type="text" class="form-control2" name="eintrag" id="eintrag" required rows="10"></textarea>  	
	</div>
	<button type="submit" class="btn">Submit</button>
		</form>
	</div>

	<!-- Footer (Scripts) -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>