<?php

session_start(); //Nicht vergessen
if(isset($_POST['room_name'])){
    $_SESSION['room_name'] = $_POST['room_name'];
}

$location = $_SESSION['room_name'];

//$statement = shell_exec("sudo /usr/bin/python /home/pi/Adafruit_Python_DHT/examples/getDataFromDB.py " . $location);
$statement = shell_exec("sudo /usr/bin/python /var/www/html/raspi_sensor/service/getDataFromDB.py " . $location);

$output = $statement;

$output = str_replace(",\n]","]", $output);

echo $output;
?>