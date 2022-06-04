<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>

    <link rel="stylesheet" href="estilos2.css">
</head>

<body>
    <input type="button" id="Regresar" value="Regresar" onclick="curriculum()">

    <input type="checkbox" id="btn-modal">

    <input type="button" id="Continuar" value="Continuar" onclick="paginaXML()">

    <label for="btn-modal" class="lbl-modal">Abrir Video</label>
    <div class="modal">
        <div class="contenedor">
            <header>¡Reproductor de Video!</header>
            <label id="modal" for="btn-modal">X</label>
            <div class="contenido">
                <video width="450" height="250" id="video1">
                    <source src="video.mp4" type="video/mp4">
                </video>
                <div>
                    <button onclick="skip(-2)">&lt;&lt;</button>
                    <button onclick="playPause()">&#9658;/||</button>
                    <button onclick="stop()">&#9640;</button>
                    <button onclick="skip(2)">&gt;&gt;</button>
                </div>
            </div>
        </div>

    </div>

    <script src="operacionVideo.js"></script>
</body>

</html>