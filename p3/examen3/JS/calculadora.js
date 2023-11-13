// Variables para almacenar los valores de la calculadora
var primerNumero = ''; // Guarda el primer número
var segundoNumero = ''; // Guarda el segundo número - pero tambien se puede entender como que guarda el numero 'actual'
var signoOperacion = ''; // Guarda el signo de la operación
var esperandoSegundoNumero = false; // Indica si estamos esperando el segundo número
//EN cada iteracion se va agregando un numero nevo que se ira agregando al verdadero numero
function ingresarNumero(numero) {
  // Verifica si el número a añadir es un punto decimal
  if (numero === '.') {
    // Si ya hay un punto decimal, no permitir añadir otro
    if (segundoNumero.includes('.')) {
      return;
    }
    // Si no hay números aún, añade un '0' antes del punto
    if (segundoNumero === '') {
      segundoNumero = '0.';
      actualizarDisplay(segundoNumero);
      return;
    }
  }

  // Si estamos esperando el segundo número, reinicia el segundo número
  if (esperandoSegundoNumero) {
    segundoNumero = numero;
    esperandoSegundoNumero = false;
  } else {
    // Añade el nuevo número al existente (o reemplaza si es '0')
    if (segundoNumero === '0' && numero !== '.') {
      segundoNumero = numero; //En caso de tener un 0 y agregar un numero despues entonces aparecera el numero que no es cero.
    } else {
      segundoNumero += numero; //numero actual
    }
  }
  actualizarDisplay(segundoNumero);
}


function ingresarOperador(operador) {
  if (!esperandoSegundoNumero) {
    primerNumero = segundoNumero;
    segundoNumero = '';
    signoOperacion = operador;
    esperandoSegundoNumero = true;
  } else {
    signoOperacion = operador; // Permite cambiar el operador si se selecciona uno nuevo antes de ingresar otro número
  }
  actualizarSignoDisplay(operador); // Actualiza la visualización del operador
}

function calcular() {
  var resultado;
  // Convertimos los números a float para manejar decimales
  var primerParsed = parseFloat(primerNumero);
  var segundoParsed = parseFloat(segundoNumero);

  switch (signoOperacion) {
    case '+':
      resultado = primerParsed + segundoParsed;
      break;
    case '-':
      resultado = primerParsed - segundoParsed;
      break;
    case 'x':
      resultado = primerParsed * segundoParsed;
      break;
    case '/':
      if (segundoParsed === 0) {
        alert('No se puede dividir por cero.');
        return;
      }
      resultado = primerParsed / segundoParsed;
      break;
    default:
      return;
  }

  // Actualizamos las variables con el resultado para permitir operaciones adicionales
  primerNumero = resultado.toString();
  segundoNumero = '';
  signoOperacion = '';
  esperandoSegundoNumero = false;
  actualizarDisplay(primerNumero);
}

function actualizarDisplay(valor) {
  var display = document.getElementById('calc-display');
  display.value = valor;
}
function actualizarSignoDisplay(signo) {
  var displaySigno = document.querySelector('.calc-sign');
  displaySigno.textContent = signo;
}
function limpiarCalculadora() {
  primerNumero = '';
  segundoNumero = '';
  signoOperacion = '';
  esperandoSegundoNumero = false;
  actualizarDisplay('');
  actualizarSignoDisplay('')
}

// Agregar eventos a los botones
var botonesNumero = document.getElementsByClassName('number');
for (var i = 0; i < botonesNumero.length; i++) {
  botonesNumero[i].addEventListener('click', function(e) { ingresarNumero(e.target.innerText); });
}

var botonesOperador = document.getElementsByClassName('operator');
for (var i = 0; i < botonesOperador.length; i++) {
  botonesOperador[i].addEventListener('click', function(e) { ingresarOperador(e.target.innerText); });
}
var botonIgual = document.getElementsByClassName('equal')[0]; // Asume que tienes un botón con clase "equal"
if (botonIgual) {
  botonIgual.addEventListener('click', calcular);
}

var botonLimpiar = document.getElementsByClassName('clear')[0]; // Asume que tienes un botón con clase "clear"
if (botonLimpiar) {
  botonLimpiar.addEventListener('click', limpiarCalculadora);
}

