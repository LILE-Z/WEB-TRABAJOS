<Doctype html>
<html>
<head>
    <title>pagina1</title>
</head>
<body>
<?php 
include("operaciones.php");
?>
<h1>Esta linea de codigo esta en HTML</h1> 
<?php
print_r("pagina1 en una linea de codigo php");
echo "pagina1 en otra linea de codigo php";
?>
<hr>
    <p>Esta es otra linea <?php echo "de codigo php" ?>
</p>
<h2>Este es un ejemplo de programacion en PHP</h2>
<?php
$a=123456;
$b=-123456;
$c=0123;
$d=0x12;
print("EL valor de la variable a: $a");
print("<br>");
?>
<p>El valor de la variable b es <?php print($b); ?></p>
<p>El valor de la variable c es <?php print($c); ?></p>
<p>El valor de la variable d es <?php print($d); ?></p>

<hr>
<h3>Valores decimales</h3>
<?php
$a=123.456;
$b=123.456e-3;
$c=123.456e3;
print("El valor de la variable a es $a");
print("<br>");
print("El valor de la variable b es $b");
print("<br>");
print("El valor de la variable c es $c");
print("<br>");
?>
<h3>Caraacteres especiales</h3>
<?php
print("Hola mundo, \n esta es una linea de texto");
print("Hola mundo, <br> esta es una linea de texto <br>");
print("\t Esta liena de Texto tiene tabulador");
print("<br>");
print("Esta linea de texto tiene \"comillas dobles\"");
print("<br>");
print('Esta linea de texto tiene \'comillas simples\'');
print("<br>");
print("Esta linea de texto tiene \\barra invertida\\");
print("<br>");
?>

<h3>Strings</h3>
<?php
$a="Juana";
$b="Hola $a";
$c='Hola $a';
print("El valor de la variable a es $a");
print("<br>");
print("El valor de la variable b es $b");
print("<br>");
print("El valor de la variable c es $c");
print("<br>");
?>
<h3>Concatencacion de cadenas</h3>
<?php
$a="Hola";
$b="Mundo";
$c=$a." ".$b;
$d=$a.$b;
print("El valor de la variable c es $a");
print("<br>");
print("El valor de la variable d es $b");
print("<br>");
print("El valor de la variable c es $c");
print("<br>");
print("El valor de la variable d es $d");
print("<br>");
?>
<h3>Arrays (Vectores)</h3>
<?php
$dia[0]="Domingo";
$dia[1]="Lunes";
$dia[2]="Martes";
$dia[3]="Miercoles";
$dia[4]="Jueves";
$dia[5]="Viernes";
$dia[6]="Sabado";
print("El contendio del vector dia 3 es $dia[3]");
print("<br>");
print("El contendio del vector dia 5 es $dia[5] <br>");
for($i=0;$i<7;$i++)
{
    print("El contendio del vector dia $i es $dia[$i] <br>");
}
print("<br>");
print("Arreglos dinamicos <br>");
for($i=0;$i<10;$i++)
{
    print("El contendio del vector dia $i es $dia[$i] <br>");
}
print("<br>");
?>
<h3>Matrices</h3>

<h3>Funciones</h3>
<?php
function suma($a,$b)
{
    $c=$a+$b;
    return $c;
}
$res=suma(5,7);
print("El resultado de la suma es $res <br>");
print("El resultado de la rests es ".resta(5,7)."<br>");
print("El resultado de la multiplicacion es ".multiplicacion(5,7)."<br>");
print("El resultado de la division es ".division(5,7)."<br>");
?>
</body>
</html>

