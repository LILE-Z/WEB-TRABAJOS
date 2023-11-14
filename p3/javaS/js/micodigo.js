var operador1 = 20;
function ventana() {
  window.open("http://www.buap.mx", "", width = 700, height = 700);
}
function fecha() {
  document.write(Date());
}
function var_globales() {
  document.write("El valor de la var1 es: [", operador1, "]");
}
function var_locales() {
  var op1 = 1;
  document.write("El valor de la var1 es: [", op1, "]");
}
function suma() {
  var oPsuma = operador1 + 2;
  var msg = "Resulatado:" + oPsuma;
  alert(msg);
}
function compara() {
  operador1 = 200;
  if (operador1 > 200) {
    alert("EL operador 1 es mayor");
  } else if (operador1 < 200) {
    alert("El operador 1 es menor")
  } else {
    alert("Son iguales");
  }
}
function incrementoFor() {
  var index;
  for (index = 0; index < 10; index++) {
    document.write(index);
    document.write("<br>");
  }
}
