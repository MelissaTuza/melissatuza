
/*Funcion para validar login*/
function validarLogin(){
    var user= document.getElementById('user').value;
    var pass= document.getElementById('pass').value;
    if (user=="melissa" && pass=="meli") {
        alert('Acceso correcto');
        window.location = "curriculum.php";
    }else{
        alert("Datos incorrectos");
    }

}
/* Funcion para ir al XML*/
function paginaXML() {
    window.location = "pag3.php";
}

function regresarIndex(){
    window.location = "index.php";
}

function regresarPag2(){
    window.location = "pag2.php";
}

function curriculum(){
    window.location.href = "curriculum.html";
}
function horarioP(){
    window.location = "horarioP.php";
}
function Audio(){
    window.location = "Audio.php";
}

function sumar(){

	var numero1= document.getElementById("num1").value;
	var numero2= document.getElementById("num2").value;
	var resultado = parseFloat(numero1) + parseFloat(numero2);

	alert(resultado);

}
function restar(){

	var numero1= document.getElementById("num1").value;
	var numero2= document.getElementById("num2").value;
	var resultado = parseFloat(numero1) - parseFloat(numero2);

	alert(resultado);

}
function multiplicar(){

	var numero1= document.getElementById("num1").value;
	var numero2= document.getElementById("num2").value;
	var resultado = parseFloat(numero1) * parseFloat(numero2);

	alert(resultado);

}
function dividir(){

	var numero1= document.getElementById("num1").value;
	var numero2= document.getElementById("num2").value;
	var resultado = parseFloat(numero1) / parseFloat(numero2);

	alert(resultado);


}