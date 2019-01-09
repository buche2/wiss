<form action="#" method="post" class="w-50 mx-auto my-2">
	<h1>Bearbeiten</h1>
	<div class="form-group">


		<div class="col">
			<label for="username">Username</label><br>
			<input  class="form-control" id="username" type="text" name="username" placeholder="Neuer Benutzername">
		</div>
		<div class="col">	
			<label for="email">E-Mail</label><br>
			<input  class="form-control" id="email" type="email" name="email" placeholder="Neue Mailadresse">
		</div>
	</div>
	<div class="form-group mt-1">
			<label for="gender">Geschlecht</label>
			<select class="form-control" id="gender" name="gender">
				<option value="Herr" selected>Männlich</option>
				<option value="Frau">Weiblich</option>
			</select>
	</div>
	<div class="form-group">
		<div class="form-row">
			<div class="col">
				<label for="firstname">Vorname</label>
				<input class="form-control" type="text" id="firstname" name="firstname" placeholder="Anderer Vorname">
			</div>
			<div class="col">
				<label for="lastname">Nachnamê</label>
				<input class="form-control" type="text" id="lastname" name="lastname" placeholder="Anderer Nachname">
			</div>
		</div>
	</div>
	<div class="form-group">
			<label for="datepicker">Geburtsdatum</label>
			<input type="text" id="datepicker" name="birthdate" class="form-control" placeholder="Anderes Geburtsdatum">
	</div>

	<button type="submit" class="btn btn-primary form-control" id="submit" name="submit">Änderungen bestätigen</button>

<script>
	$( "#datepicker" ).datepicker();
</script>
</form>
