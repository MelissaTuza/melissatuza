<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="horario.css">
	<script src="operaciones.js"></script>
    <script type=""></script>
	<title>Horario</title>
</head>
<body>
	<button onclick="Audio()">Continuar</button>
	<button onclick="paginaXML()">Atras</button>
	<h1>Horario de Clases</h1>
   <!-- <div>
    <h1>Horario de Clases</h1>
    </div>
	<table>
		<tr>
			<th>Lunes</th>
			<th>Martes</th>
			<th>Miercoles</th>
			<th>Jueves</th>
			<th>Viernes</th>
		</tr>
		<?php
			/*$json_data = file_get_contents("horario.json");
			$horario = json_decode($json_data, true);
			if(count($horario) != 0){
				foreach ($horario as $dia) {
					?>
						<tr>
							<td>
								<?php echo $dia['Lunes']; ?>
							</td>
							<td>
								<?php echo $dia['Martes']; ?>
							</td>
							<td>
								<?php echo $dia['Miercoles']; ?>
							</td>
							<td>
								<?php echo $dia['Jueves']; ?>
							</td>
							<td>
                                <?php echo $dia['Viernes']; ?>
							</td>
						</tr>
					<?php
				}
			}*/

		?>
	</table>
	<article>
	
		<button onclick="sendRequest()"> 
		Send Ajax Request
		</button>
		<script>
			function sendRequest(){
				var TheObject = new XMLHttpRequest ();
				theObject.open ('GET', 'backend.php',true);
				theObject.sendRequestHeader('Coontent-Type', 'application/x-ww-form-urlencoded');
				theObject.onreadystatechange = function () {
					console.log(theObject.responseText);
				}
				theObject.sed();
			}
			</script>
	</article>-->
	<script>
                //metodo para cargar el json en una tabla
                const xhttp = new XMLHttpRequest();
                xhttp.open('GET', 'horario.json', true);
                xhttp.send();
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        let datos = JSON.parse(this.responseText);
                        let res = document.querySelector('#res2');
                        res.innerHTML = '';
                        for(let item of datos){
                            //console.log(item.tercera_hora);
                            res.innerHTML += `
                                <tr>
                                    <td>${item.Lunes}</td>
                                    <td>${item.Martes}</td>
                                    <td>${item.Miercoles}</td>
                                    <td>${item.Jueves}</td>
                                    <td>${item.Viernes}</td>
                                </tr>
                            `
                        }

                    }
                }
            </script>
            <table>
                <tbody id="res2">

                </tbody>
            </table>
</body>
</html>