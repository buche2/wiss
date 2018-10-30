<form action="" method="post" class="w-50 mx-auto my-2">
	<div class="form-group">
			<label for="gender">Geschlecht</label>
			<select class="form-control" id="gender" name="gender">
				<option value="Männlich" selected>Männlich</option>
				<option value="Weiblich">Weiblich</option>
			</select>
	</div>
	<div class="form-group">
		<div class="form-row">
			<div class="col">
				<label for="firstname">Vorname</label>
				<input class="form-control" type="text" id="firstname" name="firstname" required>
			</div>
			<div class="col">
				<label for="lastname">Nachname</label>
				<input class="form-control" type="text" id="lastname" name="lastname" required>
			</div>
		</div>
	</div>
	<div class="form-group">
			<label for="email">E-Mail</label><br>
			<input  class="form-control" id="email" type="email" name="email" required>
	</div>
	<div class="form-group">
			<label for="username">Username</label><br>
			<input  class="form-control" id="username" type="text" name="username" required>
	</div>
	<div class="form-group">
		<div class="form-row">
			<div class="col">
				<label for="password1">Passwort</label>
				<input  class="form-control" id="password1" type="password" name="password" required pattern="(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).{6,}" title="Gross, Klein, Zahlen">
			</div>
			<div class="col">
				<label for="password2">Passwort Bestätigen</label>
				<input class="form-control" id="Password2" type="password" name="password2" required pattern="(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).{6,}" title="Gross, Klein, Zahlen">
			</div>
		</div>
	</div>
	<div class="form-group">
			<label for="datepicker">Geburtsdatum</label>
			<input type="text" id="datepicker" name="birthday" class="form-control">
	</div>
	<div class="form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="agb" value="accepted">
	    <label class="form-check-label" for="exampleCheck1">Akzeptierst du die <a href="" target="_blank">AGB</a></label>
  </div>

	<button type="submit" class="btn btn-primary form-control">Submit</button>

	<a href="index.php"><label>Doch Registriert?</label></a>

  <script>
		$( "#datepicker" ).datepicker();
	</script>
