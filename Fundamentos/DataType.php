<?php 
//Tipos de datos en PHP
/*$nombre = "Johan"; // cadenas
print($nombre);

print "\n";

var_dump($nombre);


$edad = 20; // enteros
print($edad);

print "\n";

var_dump($edad);

$altura = 1.75; // flotantes
print($altura);

print "\n";

var_dump($altura);

$verdad = true; // booleanos
print($verdad);


$mentira = false; // booleanos
print($mentira);

print "\n";

$list_Colors = ["red", "green", "blue"]; // arrays
$new = print($list_Colors[1]);

print "\n";

var_dump($list_Colors);

class Usuario{
    public $nombre;
}
$usuario = new Usuario(); // objetos
$usuario->nombre = "Johan";
print($usuario->nombre);

print "\n";

var_dump($usuario);

$nulo = null; // nulos
print($nulo);

print("\n");

var_dump($nulo);

$resources = fopen("archivo.txt", "w"); // recursos
//print($resources);
*/

// Conversion de datos

$numero = 10.5; // entero
$entero = (int) $numero; // convertir a flotante
echo($entero);

echo "<br>";
// conversion implicita
 
$edad = 22;
$introduce = "tengo $edad años";
echo $introduce;
echo "<br>";

var_dump($introduce);

echo "<br>";

$listaNumeros = [1, 2, 3, 4, 5]; // array
print_r($listaNumeros);
echo "<br>";

$null = null;
$entero = (int) $null; // convertir a entero
echo($entero);
echo "<br>";

$bool = true;
$enteroBool = (int) $bool; // convertir a entero
echo($enteroBool);
echo "<br>";

$frase = "12agent6";
$enteroFrase = (int) $frase; // convertir a entero
echo($enteroFrase);
echo "<br>";


// conversion float
$float = (float) 3.17;
echo($float);
echo "<br>";

$String = (float) "13.5";
echo($String);
echo "<br>";

$nulo = (float) null;
echo($nulo);
echo "<br>";

$verdad = (float) true;
echo($verdad);
echo "<br>";

// convertir a string

$sNumber = (string) 123;
echo($sNumber);
echo "<br>";

$sFloat = (string) 3.14;
echo($sFloat);
echo "<br>";

$sbool = (string) true;
echo($sbool);
echo "<br>";

$sNull = (string) null;
echo($sNull);
echo "<br>";


// convertir a booleano
$boolEntero = (bool) 12;
echo $boolEntero;
echo "<br>";

$boolFloat = (bool) 32.25;
echo $boolFloat;
echo "<br>";

$boolString = (bool) "Hola";
echo $boolString;
echo "<br>";

$boolFalse = (bool) false;
echo $boolFalse;
?>