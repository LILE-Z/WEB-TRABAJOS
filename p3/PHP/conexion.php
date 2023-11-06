<?php
function conexion()
{

  $servername = 'localhost';
  $database = 'practica';
  $username = 'root';
  $password = '';

  if (!($conn = mysqli_connect($servername, $username, $password)
  )) {
    printf("conexion exitosa");
  } else {
    printf("conexion no exitosa");
  }
  //Conexion a la Base de Datos
  if (!(mysqli_select_db($conn, $database))) {
    print("conexion exitosa");
  } else {
    print("conexion no exitosa");
  }
  return ($conn);
}
