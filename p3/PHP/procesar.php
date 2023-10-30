<?php
print("Script PHP");
$email=$_GET['email'];
$password=$_GET['password'];
$oculto=$_GET['oculto'];
print("Email: $email");
print("Password: $password");
print("Oculto: $oculto");

print("<br>");
if (isset($_GET['genero']))
{
    $genero=$_GET['genero'];
    print("Genero: $genero");
}
else
{
    print("No se ha seleccionado ningún género");
}

print("<br>");
if(isset($_GET['lenguajes']))
{
    $lenguajes=$_GET['lenguajes'];
    print("Lenguajes: ");
    foreach($lenguajes as $lenguaje)
    {
        print("$lenguaje ");
    }
}
else
{
    print("No se ha seleccionado ningún lenguaje");
}
?>
