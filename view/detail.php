
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <?php
       echo <<<EOF
    <div class="IMG">
      <img src="{$product->picture}" class="float-left" alt="" width="150" height="130">
    </div>
    <div class="Preis">
      <dl>
        <dt>{$product->price}</dt>
      </dl>
    </div>
    <div class="Name">
      <h3>{$product->name}</h3>
      <p> {$product->product_sdesc}</p>
    </div>
    <div class="Beschreibung">
      <p>{$product->product_ldesc}</p>
    </div>
  </div>
</div>
<button type="button" class="btn btn-outline-success" name="Warenkorb" onclick="myFunction()">Warenkorb</button>
EOF;
 ?>
    <script>
      function myFunction() {
        alert("Success! Ihr Atikel ist jetzt im Warenkorb");
      }
    </script>
