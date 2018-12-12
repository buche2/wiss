<form action="" method="post" class="mx-auto my-2">
	<h1>Schreiben sie einen neuen Eintrag</h1>
	<div class="form-group">
			<label for="titel">Titel:</label>
			<input type="text" class="form-control" name="title" id="titel" required>
	</div>
	<div class="form-group">
			<label for="kategorie">Kategorie:</label>
			<input type="text" class="form-control" name="category" id="kat"	required>
	</div>
	<div class="form-group">
			<label for="eintrag">Eintrag:</label>
			<textarea type="text" class="form-control" name="content" id="eintrag" required rows="10"></textarea>
	</div>
	<button onclick="function getDate();" type="submit" class="btn">Submit</button>
</form>
<br>