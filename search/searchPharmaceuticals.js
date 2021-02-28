var dataViewer = document.getElementById("dataViewer");


function showResult(str) {
    if (str.length === 0) {
        dataViewer.innerHTML = "";
        dataViewer.style.display = "none";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                dataViewer.style.display = "block";
                dataViewer.innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "search/livesearchPharmaceuticals.php?q=" + str, true);
        xmlhttp.send();
    }
}

