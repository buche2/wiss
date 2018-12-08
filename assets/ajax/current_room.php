<?php

$current_room = $_POST["current_room_name"];

$handle = fopen ("../current_room.txt", 'w');
fwrite ($handle, $inhalt);
fclose ($handle);

?>