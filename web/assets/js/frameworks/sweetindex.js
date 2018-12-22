document.getElementById('alert').addEventListener('click', function () {
    swal({
        icon: "info",
        title: "E-Mail senden?",
        text: "Wollen Sie die E-Mail wirklich versenden?",
        buttons: {
            cancel: "Nicht senden",
            senden: {
                text: "Jetzt senden",
                value: "senden"
            }
        }
    }).then((value) => {
        switch(value){
            case "senden":
                done();
                swal('Gesendet');
                break;
        }
    });
});

function done() {
    console.log('Test');
}
