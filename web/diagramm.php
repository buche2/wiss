<?php

require_once "assets/inc/header.php";
require_once "navi.php";
session_start(); //Nicht vergessen
if(isset($_POST['room_name'])){
    $_SESSION['room_name'] = $_POST['room_name'];
}

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

   <!-- Diagramm einfügen -->


</div>


<?php require_once "assets/inc/footer.php"; ?>
