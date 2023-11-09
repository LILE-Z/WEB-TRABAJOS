<?php
function conexion() {
    $servername = 'localhost';
    $database = 'practica';
    $username = 'root';
    $password = '';

    // Intenta conectar a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verifica si la conexión fue exitosa
    if (!$conn) {
        printf("conexion no exitosa");
        // Podrías querer manejar el error de manera más adecuada aquí
        // Por ejemplo, podrías usar die() o manejar una excepción
    } else {
        printf("conexion exitosa");
    }
    
    return $conn;
}
?>

