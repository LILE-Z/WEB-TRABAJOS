<?php

include("conexion.php");

$link = Conectar();

$username = $_GET['user'];
$password = $_GET['pass'];

print("El usuario recivido es: [$username] <br>");
print("El password recivido es: [$password] <br>");


$query = "select * from usuarios where user = '" . $username . "'";

$consulta = mysqli_query($link, $query);

$datos = mysqli_num_rows($consulta);

$fila = mysqli_fetch_row($consulta);

//$columnas = mysqli_num_fields($consulta);
//print("El numero de registros de la tabla det_usuarios es: [$datos] <br>");
//print("El numero de columnas de la tabla det_usuarios es: [$columnas] <br>");
//print("<br><hr><br>");
//print("Los Datos de la tabla det_usuarios son: <br>");

//while($fila = mysqli_fetch_row($consulta))
//{
//	print("$fila[0] - $fila[1] <br>");
//}

if ($datos == 0) {
	//print(" <br> <br> <br> Usuario No registrado <br>");
	header("Location: http://172.18.161.245/login/error.html");
} elseif ($fila[4] != $password) {
	//print(" <br> <br> <br> Error en Contraseña <br>");
	header("Location: error.html");
} elseif ($fila[3] == $username && $fila[4] == $password) {
	//print(" <br> <br> <br> Bienvenidos al Sistema <br>");
	header("Location:sistema.html");
}

