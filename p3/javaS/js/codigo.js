function mostrarAlerta() {
  alert('Se hizo click sobre esta etiqueta');
}
function hacerclick() {
  document.getElementsByTagName('p')[0].onclick = mostrarAlerta;
}
window.onload = hacerclick;


