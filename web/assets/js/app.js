"use strict";

let sensor_data = "";

$(document).ready(function () {

    console.log("ready");

    $.ajax({
        type: 'post',
        url: 'assets/ajax/select_mongo_from_mongo_db.php',
        data: {
            //current_mongo: current_mongo;
        },
        error: function (xhr, textStatus, error) {
            console.log("Etwas ist schief gegangen!");
        },

    }).done(function (result) {

        //let json_obj = JSON.parse(result);
        //sensor_data = json_obj;

        sensor_data = result;

        console.log(sensor_data);

        let sensor_data_length = sensor_data.length;

        // Kontrolliert ob mindestens ein json objekt vorhanden ist.
        if (sensor_data_length >= 1) {
            //console.log(provider_data);
        } else {
            console.log("Beim laden der Anbieter ist etwas schief gegangen!");
        }
    });
});