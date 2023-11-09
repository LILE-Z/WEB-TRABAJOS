<?php
include("conexion.php");
$link = conexion();

$query = "SELECT * FROM usuarios";
$consulta = mysqli_query($link, $query);

if ($consulta) {
    $datos = mysqli_num_rows($consulta);
    
    if ($datos > 0) {
        while ($fila = mysqli_fetch_assoc($consulta)) {
            // Asegúrate de escapar la salida si se va a mostrar en una página web
            printf("%s - %s - %s\n", 
		    htmlspecialchars($fila['ID']), 
		    htmlspecialchars($fila['NOMBRE_COMPLETO']), 
		    htmlspecialchars($fila['CORREO'])
            );
        }
    } else {
        echo "No hay usuarios para mostrar.";
    }
} else {
    echo "Error en la consulta: " . mysqli_error($link);
}

mysqli_close($link);
?>

