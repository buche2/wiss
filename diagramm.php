<?php

require_once "assets/inc/header.php";
require_once "navi.php";

?>

<link rel="stylesheet" href="assets/css/diagramm.css">
<title>Diagramm</title>
</head>
<body>
<div class="container">
    <!-- Standard-Panel-Inhalt -->
    <div class="panel-heading"></div>
    <div class="panel-body">
    </div>

    <!-- Button, der das Modal aufruft -->
    <form>
        <div class="form-group">
            <label for="room">Raumname</label>
            <input type="email" class="form-control" id="room" placeholder="Zimmer 13">

            <button type="button" class="btn btn-primary" data-toggle="modal">
                Neuer Standort erfassen
            </button>
        </div>
    </form>


    <button type="button" class="btn btn-success" data-toggle="modal">
        Start Messung
    </button>

    <button type="button" class="btn btn-danger" data-toggle="modal">
        Ende
    </button>

   <!-- Diagramm einfügen -->


</div>


<?php require_once "assets/inc/footer.php"; ?>
