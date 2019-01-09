<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <?php
    $filename = 'assets/img/Products/'.$this->product->id.'.jpg';
    if (file_exists($filename)) {
      $filename;
    } else {
      $filename = 'assets/img/imagenotavailable.jpg';
    }
    echo <<<EOF
      <div class="IMG">
        <img src="$filename" class="rounded float-left" alt="" hspace="20" width="400" height="400">        </div>
      <div class="Name">
        <h3>{$this->product->name}</h3>
      <div class="Preis">
        <dl>
          <dt>{$this->product->price}.- CHF</dt>
        </dl>
      </div>
        <p> {$this->product->product_sdesc}</p>
      </div>
      </br>
      </br>
      <div class="Beschreibung">
        <p>{$this->product->product_ldesc}</p>
      </div>
      <button type="button" class="btn btn-outline-success" name="Warenkorb" onclick="myFunction({$this->product->id})">Warenkorb</button>
      <a href="index.php?page=shop"><button type="button" class="btn btn-outline-primary">Weiter Shoppen</button></a>
EOF;
    ?>
  </div>
</div>

<script>
  function myFunction(productid) {
    $.ajax('index.php?page=warenkorb&action=add&id='+productid);

    alert("Success! Ihr Atikel ist jetzt im Warenkorb");
  }
</script>
