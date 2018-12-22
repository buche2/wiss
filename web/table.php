<?php

require_once "assets/inc/header.php";
require_once "navi.php";
session_start(); //Nicht vergessen
if(isset($_POST['room_name'])){
    $_SESSION['room_name'] = $_POST['room_name'];
}

?>



<link rel="stylesheet" href="assets/css/table.css">
<title>Tabelle</title>
</head>
<body>
<div class="container">
    <!-- Standard-Panel-Inhalt -->
    <div class="panel-heading"></div>
    <div class="panel-body">
    </div>

    <?php

    if(!isset($_SESSION['room_name']) || empty($_SESSION['room_name'])) {
        echo $_SESSION['room_name'] = "Sie haben noch keinen Raum definiert. Gehen Sie zurück auf die Startseite";
    }else{
        echo $_SESSION['room_name'];
    }

    ?>

    <br>
    <br>

    <!-- Button, der das Modal aufruft -->
    <button id="btn_start_stop" type="button" class="btn btn-success">Start Messung</button>

    <!--<button type="button" class="btn btn-danger" data-toggle="modal">
        Ende
    </button>-->

    <!-- Tabelle -->
    <table class="table table-striped" cellspacing="0" width="100%">


        <thead class="black white-text">
        <tr>
            <th class="text-white" scope="col">Raum</th>
            <th class="text-white" scope="col">Datum</th>
            <th class="text-white" scope="col">Temperatur</th>
            <th class="text-white" scope="col">Luftfeuchtigkeit</th>
        </tr>
        </thead>
        <tbody id="table_content_sensor">
        </tbody>
    </table>
</div>




<?php require_once "assets/inc/footer.php"; ?>

