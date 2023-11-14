//Escuchar los cambios en el formulario al ocurrir el event submit y ejecutar la funcion
document.getElementById('registroForm').addEventListener('submit', function(event) {

  event.preventDefault();
  var nombreUsuario = document.getElementById('username').value;

  var correoElectronico = document.getElementById('email').value;

  var contrasena = document.getElementById('password').value;

  var valido = true;

  //Validacion cada que ocurre el evento submit
  //Comparacion estricta
  if (nombreUsuario === "") {
    console.log("Ingresar datos");
    document.getElementById('username').classList.add('is-invalid');
    document.getElementById('usernameError').style.display = "block";
    valido = false;
  } else {
    // Ir cambiando de color el elemento
    console.log("Datos llenados");
    document.getElementById('username').classList.remove('is-invalid');
    document.getElementById('username').classList.add('is-valid');

    document.getElementById('usernameError').style.display = "none";
  }
  if (correoElectronico === "") {
    console.log("Ingresar datos");
    document.getElementById('email').classList.add('is-invalid');
    document.getElementById('emailError').style.display = "block";
    valido = false;

  } else {
    console.log("Datos llenados");
    document.getElementById('email').classList.remove('is-invalid');
    document.getElementById('email').classList.add('is-valid');

    document.getElementById('emailError').style.display = "none";
  }
  if (contrasena === "") {
    console.log("Ingresar datos");
    document.getElementById('passwordError').style.display = "block";
    document.getElementById('password').classList.add('is-invalid');
    valido = false;

  } else {
    console.log("Datos llenados");
    document.getElementById('password').classList.remove('is-invalid');
    document.getElementById('password').classList.add('is-valid');

    document.getElementById('passwordError').style.display = "none";
  }
  if (valido == true) {
    //Mostarar Valores del formulario
    document.getElementById('mostrarNombre').textContent = nombreUsuario;

    document.getElementById('mostrarEmail').textContent = correoElectronico;

    document.getElementById('mostrarPassword').textContent = contrasena;
    document.getElementById('datosCapturados').style.display = "block";

  }

});

