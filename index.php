<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi pagina web Melissa</title>
    <!--conecccion con csss-->
    <link rel="stylesheet" href="estilos.css">
    <script src="operaciones.js"></script>
</head>

<body>
    <input type="checkbox" id="btn-modal">
    <label for="btn-modal" class="lbl-modal">Abrir Modal</label>
    <div class="modal">
        <div class="contenedor">
            <header>¡Bienvenidos!</header>
            <label id="modal" for="btn-modal">X</label>
            <div class="contenido">
                <h2>Formulario de Login</h2>
                <form>
                    <label id="modal2" for="uname">Usuario:</label>
                    <input type="text" id="user" placeholder="usuario"><br>

                    <label id="modal2" for="pname">Clave:</label>
                    <input type="password" id="pass" placeholder="contraseña"><br>

                    <input type="button" value="Ingresar" onclick="validarLogin()">
                </form>

            </div>
        </div>

    </div>



</body>

</html>