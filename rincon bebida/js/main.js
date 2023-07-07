/* Mostrar y ocultar menú*/

function mostrar() {
	document.getElementById("sidebar").style.width = "25%";
	document.getElementById("container").style.marginLeft = "300px";
	document.getElementById("abrir").style.display = "none";
	document.getElementById("cerrar").style.display = "inline";
}

function ocultar() {
	document.getElementById("sidebar").style.width = "0";
	document.getElementById("container").style.marginLeft = "0";
	document.getElementById("abrir").style.display = "inline";
	document.getElementById("cerrar").style.display = "none";
}