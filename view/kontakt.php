<form name="Kontaktformular" method="post" action="?page=kontakt&action=send">

  <h1 class="mt-5">Kontaktformular</h1>

    <div class="form-group">
        <label for="sel1">Anrede</label>
        <select class="form-control" id="sel1">
            <option>-</option>
            <option>Herr</option>
            <option>Frau</option>
        </select>
    </div>

    <div class="form-group" >
        <label for="form_name">Vorname *</label>
        <input id="form_name" type="text" name="form_name" class="form-control" placeholder="Vorname" required="required" data-error="Vorname ist erforderlich.">
    </div>
    <div class="form-group">
        <label for="form_lastname">Name *</label>
        <input id="form_lastname" type="text" name="form_lastname" class="form-control" placeholder="Name" required="required" data-error="Name ist erforderlich.">
    </div>
    <div class="form-group">
        <label for="form_email">Email *</label>
        <input id="form_email" type="email" name="form_email" class="form-control" placeholder="Email" required="required" data-error="Email is erforderlich.">
    </div>
    <div class="form-group">
        <label for="form_betreff">Betreff</label>
        <input id="form_betreff" type="text" name="form_betreff" class="form-control" placeholder="Name"  data-error="Betreff">
    </div>
    <div class="form-group">
        <label for="form_message">Mitteilung *</label>
        <textarea id="form_message" name="form_message" class="form-control" placeholder="Text" rows="4" required="required" data-error="Schreib uns eine Mitteilung"></textarea>
    </div>
        <button class="btn btn-primary" type="submit">Senden <i class="fas fa-envelope"></i></button>
          <p class="text-muted">
            <strong>*</strong> Diese Felder müssen ausgefühlt sein.
          </p>
</form>
