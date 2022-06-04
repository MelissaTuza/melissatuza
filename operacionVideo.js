/*Funciones para reproducir video*/

var miVideo = document.getElementById("video1");
function playPause() {
    if (miVideo.paused)
        miVideo.play();
    else
        miVideo.pause();

}

function stop() {
    miVideo.pause();
    miVideo.currentTime = 0;
}

function skip(value) {
    miVideo.currentTime += value;
}


/* Funcion para ir al XML*/
function paginaXML() {
    window.location = "pag3.php";
}
function curriculum(){
    window.location = "curriculum.php";
}


function regresarIndex(){
    window.location = "index.php"
}