<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <?php
       echo <<<EOF
        <div class="IMG">
          <img src="{$this->product->picture}" class="float-left" alt="" width="150" height="130">
        </div>
          <div class="Preis">
            <dl>
              <dt>{$this->product->price}</dt>
            </dl>
          </div>
        <div class="Name">
          <h3>{$this->product->name}</h3>
          <p> {$this->product->product_sdesc}</p>
        </div>
        <div class="Beschreibung">
          <p>{$this->product->product_ldesc}</p>
        </div>

        <button type="button" class="btn btn-outline-success" name="Warenkorb" onclick="myFunction()">Warenkorb</button>
EOF;
?>
  </div>
</div>

<script>
  function myFunction() {
    alert("Success! Ihr Atikel ist jetzt im Warenkorb");
  }
</script>
