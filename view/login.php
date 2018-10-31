<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<div class="mx-auto">
	<h1>Login</h1>
</div>

<form action="" method="post" onsubmit="">
	<div class="form-group">
		<label for="email">E-Mail Adresse</label>
		<input type="email" class="form-control" name="email" id="email" required>
	</div>
	
	<div class="form-group">
		<label for="password">Passwort</label>
		<input type="text" class="form-control" name="password" id="password" required>
	</div>
	
	<div class="form-group form-check">
		<input type="checkbox" class="form-check-input" name="rem" id="rem">
		<label class="form-check-label" for="rem">Remember me?</label>
	</div>

		<button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
</form>

<p>Alle Felder mit * müssen eingefügt werden</p>
