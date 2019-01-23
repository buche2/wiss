<form action="#" method="post" class="w-50 mx-auto my-2">
	<h1>Bearbeiten</h1>
	<div class="form-group">


		<div class="col">
			<label for="username">Username</label><br>
			<input  class="form-control" id="username" type="text" name="username" value="<?= $this->user->username ?>" placeholder="Neuer Benutzername">
		</div>
		<div class="col">	
			<label for="email">E-Mail</label><br>
			<input  class="form-control" id="email" type="email" name="email" placeholder="Neue Mailadresse" value="<?= $this->user->email ?>">
		</div>
	</div>
	<div class="form-group mt-1">
		<div class="col">
			<label for="gender">Geschlecht</label>
			<select class="form-control" id="gender" name="gender" value="<?= $this->user->gender ?>">
				<option value="Herr" selected>Männlich</option>
				<option value="Frau">Weiblich</option>
			</select>
		</div>
	</div>
	<div class="form-group mt-1">
		<div class="form-row col">
			<div class="col">
				<label for="firstname">Vorname</label>
				<input class="form-control" type="text" id="firstname" name="firstname" value="<?= $this->user->firstname ?>" placeholder="Anderer Vorname">
			</div>
			<div class="col">
				<label for="lastname">Nachname</label>
				<input class="form-control" type="text" id="lastname" name="lastname" value="<?= $this->user->lastname ?>" placeholder="Anderer Nachname">
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col"> 
			<label for="datepicker">Geburtsdatum</label>
			<input type="text" id="datepicker" name="birthdate" class="form-control" placeholder="Anderes Geburtsdatum" value="<?= (new \DateTime($this->user->birthdate))->format('d.m.Y') ?>">
		</div>
	</div>

	<div class="col">
		<button type="submit" class="btn btn-primary form-control" id="submit" name="submit">Änderungen bestätigen</button>
	</div>

<script>
	$( "#datepicker" ).datepicker();
</script>
</form>
