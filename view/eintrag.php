<form action="" method="post" class="w-50 mx-auto my-2">
	<h1>Schreiben sie einen neuen Eintrag</h1>
	<div class="form-group">
			<label for="titel">Titel:</label>
			<input type="text" class="form-control" name="titel" id="titel" required>
	</div>
	<div class="form-group">
			<label for="kategorie">Kategorie:</label>
			<input type="text" class="form-control" name="kategorie" id="kat"	required>
	</div>
	<div class="form-group">
			<label for="eintrag">Eintrag:</label>
			<textarea type="text" class="form-control" name="eintrag" id="eintrag" required rows="10"></textarea>
	</div>
	<button onclick="function getDate();" type="submit" class="btn">Submit</button>
</form>
<br>

<script>
   var time = new Date();

   function getDate() {
   var year = time.getYear()+1900;
   var month = time.getMonth()+1;
   var day = time.getDate();
   var date = year + "-" + month + "-" + day;

   return date;
   };
 </script>