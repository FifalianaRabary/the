window.addEventListener("DOMContentLoaded", function(){
    function sendDataCueillette() {
        var xhr;
        try {
            xhr = new XMLHttpRequest();
        } catch (e) {
            xhr = false;
        }

        var form = document.getElementById("formCueillette");

        xhr.addEventListener("load", function (event) {
            if (xhr.status === 200) {
                var response = event.target.responseText;
                if (response === "success") {
                    alert("Cueillette inserer");
                } else {
                    alert("Cueillette non inserer");
                }
            } else {
                alert("Something went wrong!");
            }
        });

        xhr.open("GET", "../pages/traitement/traitementCueillette.php?date=" + document.getElementById("date").value + "&id_cueilleur=" + document.getElementById("id_cueilleur").value + "&id_parcelle=" + document.getElementById("id_parcelle").value + "&poids=" + document.getElementById("poids").value,true);
        xhr.send();
    }

    var submitButtonCueillette = document.querySelector("#formCueillette input[type='submit']");
    if (submitButtonCueillette) {
        submitButtonCueillette.addEventListener("click", function (event) {
            event.preventDefault();
            sendDataCueillette();
        });
    }
});