//Definir Variables
var btnAbrirPopup = document.getElementById('btn-open-popup'),
overlay = document.getElementById('overlay'),
popup = document.getElementById('popup'),
btnCerrarPopup = document.getElementById('btn-close-popup');

//Mostrar Popup
btnAbrirPopup.addEventListener('click', function() {
	overlay.classList.add('active');
	popup.classList.add('active');
});

//Cerrar Popup
btnCerrarPopup.addEventListener('click', function() {
	overlay.classList.remove('active');
	popup.classList.remove('active');
});