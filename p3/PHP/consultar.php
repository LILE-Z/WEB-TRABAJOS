<?php
include("conexion.php");
$link = conexion();

$querry = "SELECT * FROM USUARIOS";
$consulta = mysqli_query($link, $querry);
$datos = mysqli_num_rows($consulta);

while ($fila = mysqli_fetch_row($consulta)) {
  printf("$fila[0]-$fila[1]- $fila[2]");
}
mysqli_close($link);
