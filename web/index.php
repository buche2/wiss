<?php

require_once "assets/inc/header.php";
require_once "navi.php";
session_start(); //Nicht vergessen
if(isset($_POST['room_name'])){
    $_SESSION['room_name'] = $_POST['room_name'];
}

?>

<title>Start.php</title>

<br>

<form method="post" action="table.php">
    <div class="form-group">
        <label for="room">Raumname</label>
        <input type="text" class="form-control" id="room_name" name="room_name" placeholder="Zimmer 13">
        <br>
        <input type="Submit" class="btn btn-primary"/>
        <!--<button type="button" class="btn btn-primary" data-toggle="modal">
            Neuer Standort erfassen
        </button>-->
    </div>
</form>

<?php

$_SESSION['current_room'];

?>

<h1>Herzlich Willkommen</h1>

<?php include "assets/inc/footer.php"?>


