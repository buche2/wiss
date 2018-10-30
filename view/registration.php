<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body>
	<form action="" method="Get">
				<label class="">Geschlecht</label><br>
				<select class="" name="gender">
					<option value="Männlich" selected>Männlich</option>
					<option value="Weiblich">Weiblich</option>
				</select><br><br>
				<label class="" style="margin-right:7%;">Vorname</label>
				<label class="">Nachname</label><br>
				
				<input class="" type="text" name="vorname" required>
				<input class="" type="text" name="nachname" required><br><br>
				
				<label class="">Email</label><br>
				<input  class="" id="email" type="text" name="email" required>
				<br><br>

				<label class="">Username</label><br>
				<input  class="" id="username" type="text" name="username" required>
				<br><br>

				<label class="" style="margin-right:7%;">Passwort</label>
				<label id="" name="nachname">Passwort Bestätigen</label><br>
				<input  class="" id="Password1" type="password" name="password" required pattern="(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).{6,}" title="Gross, Klein, Zahlen">
				<input class="" id="Password2" type="password" name="password" required pattern="(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).{6,}" title="Gross, Klein, Zahlen">
				<br><br>
			
				<label>Geburtsdatum<br><input type="text" id="datepicker"></label><br><br>
			
				<label class="">Akzeptierst du die <a href="" target="_blank">AGB</a></label>
				<input  class="fmin" type="Checkbox" name="AGB" required>
				<br><br>
				
				<a href="Index.php"><label>Doch Regristriert?</label></a><br><br>
				
				<input class="fmin" type="submit" value="Regristrieren">

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
 		$( function() {
    		$( "#datepicker" ).datepicker();
  		} );
  </script>
</body>
</html>