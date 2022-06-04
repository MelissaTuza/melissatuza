<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes y Contador</title>
</head>
<body>
<?php

echo ('<script src="javascript.js"></script>');
echo ('<script src="operaciones.js"></script>');
echo ('<script src="metodocont.js"></script>');
echo('<link rel="stylesheet" href="estilos3.css">');
echo('<link rel="stylesheet" href="stylecal.css">');
echo('<link rel="carrusel" href="carrusel.css">');


echo ('<h2>Menú</h2>');

echo ('<button onclick="regresarIndex()">Inicio</button>');

echo ('<button onclick="regresarPag2()">Regresar</button>');

echo ('<button onclick="horarioP()">Ver Horario</button>');

echo ('<button onclick="Audio()">Escuchar Audio</button>');

echo ('<a href="calcu.html"> <button>Calculadora</button></a>');

echo ('<a href="carrusel.html"> <button>Carrusel</button></a>');

echo ('<h1>Contador de Elementos</h1>');

echo ('<h4>Presione uno de los siguientes botones</h4>');

echo ('<table>');
echo ('<tr>');
echo ('<th>Cédula</th>');
echo ('<th>Género | Matriculado | ID</th>');
echo ('<th>Nombre</th>');
echo ('<th>Apellido</th>');
echo ('<th>Celular</th>');
echo ('</tr>');


if (file_exists('Estudiantes.xml')) {
    $xml = simplexml_load_file('Estudiantes.xml');
    foreach ($xml->estudiante as $key0 => $est) {
        echo '<tr>';
        echo '<td>' . $est->cedula . '</td>';
        echo '<td>' . $est->cedula['genero'] . ' - ' . $est->cedula['matriculado'] . ' - ' . $est->cedula['id'] . '</td>';
        echo '<td>' . $est->nombre . '</td>';
        echo '<td>' . $est->apellido . '</td>';
        echo '<td>' . $est->celular . '</td>';
        echo '</tr>';
    }
} else {
    exit('No se puede abrir el xml');
}
?>
<ul>
                <li><input type="button" id="td" value="td" onclick="ContadorEtiquetas('td')"></li>
                <li><input type="button" id="th" value="th" onclick="ContadorEtiquetas('th')"></li>
                <li><input type="button" id="a" value="a" onclick="ContadorEtiquetas('a')"></li>
                <li><input type="button" id="button" value="button" onclick="ContadorEtiquetas('button')"></li>
            </ul>
        <h1>Lista de Estudiantes</h1>
        </body>
</html>

