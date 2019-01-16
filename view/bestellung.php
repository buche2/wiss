<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Lieferadresse</a></li>
    <li><a href="#tabs-2">Zahlungmethode</a></li>
  </ul>
  <div id="tabs-1">
    <form action="" method="post">
      <h2>Rechnungs/Liefer-adresse</h2>
      <div class="form-group">
        <label for="street">Strasse</label>
        <input type="text" name="street" class="form-control" id="street" placeholder="Strasse" required>
      </div>
      <div class="form-group">
        <label for="zip">PLZ</label>
        <input type="text" name="zip" class="form-control" id="zip" placeholder="PLZ" required>
      </div>
      <div class="form-group">
        <label for="city">Ort</label>
        <input type="text" name="city" class="form-control" id="city" placeholder="Ort" required>
      </div>
      <div class="form-group">
        <label for="nation">Land</label>
        <select name="nation" id="nation" required class="form-control">
          <option value="">Auswahl...</option>
          <option value="CH">Schweiz</option>
          <option value="DE">Deutschland</option>
        </select>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="different" name="different" required
        onclick="toggleDelivery();">
        <label class="form-check-label" for="different">andere Lieferadresse?</label>
      </div>
      <div id="lieferadresse">
        <div class="form-group">
          <label for="streetDelivery">Strasse</label>
          <input type="text" name="streetDelivery" class="form-control" id="streetDelivery" placeholder="Strasse" required>
        </div>
        <div class="form-group">
          <label for="zipDelivery">PLZ</label>
          <input type="text" name="zipDelivery" class="form-control" id="zipDelivery" placeholder="PLZ" required>
        </div>
        <div class="form-group">
          <label for="cityDelivery">Ort</label>
          <input type="text" name="cityDelivery" class="form-control" id="cityDelivery" placeholder="Ort" required>
        </div>
        <div class="form-group">
          <label for="nationDelivery">Land</label>
          <select name="nationDelivery" id="nationDelivery" required class="form-control">
            <option value="">Auswahl...</option>
            <option value="CH">Schweiz</option>
            <option value="DE">Deutschland</option>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div id="tabs-2">
    <form method="post">
      <h2>Zahlungsangaben</h2>
        <label for="Methode">Zahlungmethode*</label>
          <select name="Zahlungmethode" id="zahlung" required class="form-control">
            <option value="">Auswahl...</option>
            <option value="VI">Visa</option>
            <option value="MC">Mastercard</option>
            <option value="AE">American Express</option>
            <option value="Pp">Paypal</option>
          </select>
        <label for="Nummer">Kartennummer*</label>
          <input type="text" name="Kartennummer" class="form-control" placeholder="z.b 12345" min="12" max="16" required>
        <label for="Nummer">Ablaufdatum*</label>
          <input type="text" id="datepicker" name="Ablaufdatum" class="form-control">
        <label for="Nummer">Sicherheitscode*</label>
          <input type="text" name="Sicherheitsnummer" class="form-control" placeholder="z.b 1111" max="4" required><br>
          <input class="form-check-input" type="checkbox" value="" required>
        <label class="form-check-label" for="AGB">Ich habe die Allgemeinen Geschäftsbedingungen gelesen und verstanden.</label><br>
          <input class="form-check-input" type="checkbox" value="">
        <label class="form-check-label" for="ZA">Zahlungsangaben speichern?</label><br><br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
<script>
    $( "#tabs" ).tabs();
    $("#lieferadresse").hide();

    function checkpw(){
      if($("#password1").val() == $("#password2").val()){
        return true;
      }else{
        alert("Passworte nicht identisch!");
        return false;
      }
    }

    function toggleDelivery(){
      $("#lieferadresse").toggle();
    }
      $( "#datepicker" ).datepicker();
</script>
