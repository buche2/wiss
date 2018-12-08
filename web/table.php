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
    <button type="button" class="btn btn-success" data-toggle="modal">
        Start Messung
    </button>

    <button type="button" class="btn btn-danger" data-toggle="modal">
        Ende
    </button>

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
        <tbody>
            <tr><td>Zimmer 13</td><td>25.November 2018 11:30</td><td>23.3°</td><td>50%</td></tr>
            <tr><td>Zimmer 13</td><td>25.November 2018 11:30</td><td>23.3°</td><td>50%</td></tr>
            <tr><td>Zimmer 13</td><td>25.November 2018 11:30</td><td>23.3°</td><td>50%</td></tr>
            <tr><td>Zimmer 13</td><td>25.November 2018 11:30</td><td>23.3°</td><td>50%</td></tr>
            <tr><td>Zimmer 13</td><td>25.November 2018 11:30</td><td>23.3°</td><td>50%</td></tr>
            <tr><td>Zimmer 23</td><td>03.Dezember 2018 10:05</td><td>25.3°</td><td>60%</td></tr>
            <tr><td>Zimmer 11</td><td>05.Dezember 2018 09:21</td><td>23.3°</td><td>30%</td></tr>
            <tr><td>Zimmer 17</td><td>07.Dezember 2018 20:09</td><td>23.3°</td><td>25%</td></tr>
            <tr><td>Zimmer 17</td><td>07.Dezember 2018 20:09</td><td>23.3°</td><td>25%</td></tr>
            <tr><td>Zimmer 17</td><td>07.Dezember 2018 20:09</td><td>23.3°</td><td>25%</td></tr>
            <tr><td>Zimmer 17</td><td>07.Dezember 2018 20:09</td><td>23.3°</td><td>25%</td></tr>
            <tr><td>Zimmer 17</td><td>07.Dezember 2018 20:09</td><td>23.3°</td><td>25%</td></tr>
            <tr><td>Zimmer 32</td><td>10.Dezember 2018 12:00</td><td>23.3°</td><td>28%</td></tr>
            <tr><td>Zimmer 32</td><td>10.Dezember 2018 12:00</td><td>23.3°</td><td>28%</td></tr>
            <tr><td>Zimmer 32</td><td>10.Dezember 2018 12:00</td><td>23.3°</td><td>28%</td></tr>
            <tr><td>Zimmer 32</td><td>10.Dezember 2018 12:00</td><td>23.3°</td><td>28%</td></tr>
            <tr><td>Zimmer 32</td><td>10.Dezember 2018 12:00</td><td>23.3°</td><td>28%</td></tr>
            <tr><td>Zimmer 31</td><td>12.Dezember 2018 12:30</td><td>23.3°</td><td>44%</td></tr>
        </tbody>
    </table>
</div>




<?php require_once "assets/inc/footer.php"; ?>

