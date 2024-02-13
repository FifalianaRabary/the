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

        xhr.open("GET", "../traitements/traitementCueillette.php?date=" + document.getElementById("dateform").value + "&&cueilleur=" + document.getElementById("cueilleur").value + "&&parcelle=" + document.getElementById("parcelle").value + "&&poids=" + document.getElementById("poids").value);
        xhr.send();
    }
});