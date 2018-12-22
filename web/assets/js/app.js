"use strict";

let sensor_data = "";
var insertInterval;

$(document).ready(function () {

    select_ajax_mongo_db();
    
});

function select_ajax_mongo_db(){

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

        let json = JSON.parse(result);
        //console.log(typeof json);

        generateHTMLTable(json);

        let sensor_data_length = result.length;

        // Kontrolliert ob mindestens ein json objekt vorhanden ist.
        if (sensor_data_length >= 1) {
            //console.log(provider_data);
        } else {
            console.log("Beim laden der Anbieter ist etwas schief gegangen!");
        }
    });
}

function insert_into_mongo(){

    $.ajax({
        type: 'post',
        url: 'assets/ajax/create_new_mongo_from_mongo_db.php',
        data: {
            //current_mongo: current_mongo;
        },
        error: function (xhr, textStatus, error) {
            console.log("Etwas ist schief gegangen!");
        },

    }).done(function (result) {

        console.log("inserteretetetd");

        let json = JSON.parse(result);

        generateHTMLTable(json);
        let sensor_data_length = result.length;

        // Kontrolliert ob mindestens ein json objekt vorhanden ist.
        if (sensor_data_length >= 1) {
            //console.log(provider_data);
        } else {
            console.log("Beim laden der Anbieter ist etwas schief gegangen!");
        }
    });

}

function generateHTMLTable(data_array) {

    let table_content_sensor = document.getElementById("table_content_sensor");
    let data_humid = "";
    let data_location = "";
    let data_temp = "";
    let data_time = "";

    //console.log(data_array);

    //console.log(Array.isArray(data_array));

    if(!Array.isArray(data_array)){
        data_array = [data_array];
        //console.log(data_array);
    }

    for(let i = 0; i <= data_array.length -1  ; i++) {

        data_humid = data_array[i].humid;
        data_location = data_array[i].location;
        data_temp = data_array[i].temp;
        data_time = data_array[i].time;

        table_content_sensor.innerHTML +=
            "<tr>" +
            "<td>" + data_location +"</td>" +
            "<td>" + data_time + "</td>" +
            "<td>" + data_temp + "</td>" +
            "<td>" + data_humid + "</td>";
        table_content_sensor.innerHTML += "</tr>";

        console.log("läuft");

    }
}


$( "#btn_start_stop" ).click(function() {

    if (document.getElementById('btn_start_stop').innerHTML == "Start Messung") {
        document.getElementById('btn_start_stop').innerHTML = "Stop Messung";
        insertInterval = setInterval(insert_into_mongo , 5000);
        console.log("Messung gestarted");
    }
    else{
        document.getElementById('btn_start_stop').innerHTML = "Start Messung";
        clearInterval(insertInterval);
        console.log("Messung gestopped");
        location.reload();
        

    }




});
