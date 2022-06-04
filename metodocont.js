function ContadorEtiquetas(etiqueta){
    var contador;
    contador = document.getElementsByTagName(etiqueta);
    alert("Cantidad de "+etiqueta+": "+contador.length);
}
