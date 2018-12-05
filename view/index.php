<h1 class="mt-5" style="text-align:center;">Willkommen auf der Wissforum Webseite</h1>
<p class="lead" style="text-align:center;">Hier auf dem Wissforum kannst du deinen Mitmenschen deine Fragen stellen, Probleme mitteilen, nach Hilfe fragen, eine Diskussion beginnen und noch vieles mehr.</p><br>

<?php

use wiss\helper\Session;

if(!Session::has('auth')){
 ?>

<form action="" method="post">
  <div class="form-group">
    <div class="row justify-content-around">
      <div class="col-4">
        <div style="text-align:center;">
          <label>Hast du schon ein Account? Dann Log dich ein!</label><br>
          <button type="submit" class="btn btn-primary"><a href="index.php?page=auth&action=login" style="color:white;text-decoration:none;">Einloggen</a></button>
        </div>
      </div>
      <div class="col-4">
        <div style="text-align:center;">
          <label>Bist du neu Hier? Dann Registrier dich!</label><br>
          <button type="submit" class="btn btn-secondary"><a href="index.php?page=auth" style="color:white;text-decoration:none;">Registrieren</a></button>
        </div>
      </div>
    </div>
  </div>
</form>
<?php }else{
  $username = Session::get('auth')->username;
  echo <<<EOF
  <div>
    <p class="lead" style="text-align:center;">Willkommen {$username}</p>
  </div>

  <form action="" method="post">
  <div class="form-group">
    <div class="row justify-content-around">
      <div class="col-4">
        <div style="text-align:center;">
          <label>Willst du aufs Forum? Dann Klick hier!</label><br>
          <button type="submit" class="btn btn-primary"><a href="index.php?page=auth&action=forum" style="color:white;text-decoration:none;">Forum</a></button>
        </div>
      </div>
      <div class="col-4">
        <div style="text-align:center;">
          <label>Willst du unser tollen Produkte kaufen? Dann Klick hier!</label><br>
          <button type="submit" class="btn btn-secondary"><a href="index.php?page=auth&action=shop" style="color:white;text-decoration:none;">Shop</a></button>
        </div>
      </div>
    </div>
  </div>
</form>
EOF;
} ?>
<br>
<p>Back to <a href="https://www.wiss.ch/de-CH">WISS Webseite</a></p>
