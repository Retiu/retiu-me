var inFocus = true
window.addEventListener("blur", function() {
    inFocus = false;
 });
 window.addEventListener("focus", function() {
    inFocus = true;
 });

function getLastFM() {
    if(!inFocus) return;
    var xhr = new XMLHttpRequest();

    xhr.open('POST', '/api/get_lastfm.php', true);
    xhr.onload = function () {
        // do something to response
        var resp = JSON.parse(this.responseText);
        // artist - title
        var artist = resp["recenttracks"]["track"][0]['artist']['#text']
        var title = resp["recenttracks"]["track"][0]['name']
        var link = resp["recenttracks"]["track"][0]['url']
        document.getElementById("currentlyplaying").innerHTML = `<strong>${artist}</strong> - ${title}`;
        document.getElementById("linkPlaying").innerHTML = `${link}`;

    };
    xhr.send();
}

getLastFM();

setInterval(function(){
    getLastFM()
}, 45000)