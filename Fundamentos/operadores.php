<?php 
$numero1 = 20;
$numero2 = 10;

print ("<h1> Operadores aritméticos </h1>");
echo "Suma: " . ($numero1 + $numero2) . "<br>";
echo "Resta: " . ($numero1 - $numero2) . "<br>";
echo "Multiplicación: " . ($numero1 * $numero2) . "<br>";
echo "División: " . ($numero1 / $numero2) . "<br>";
echo "Módulo: " . ($numero1 % $numero2) . "<br>";

$operacionPedante = 12 + 4 * (6 - 2) / 2 % 2;
echo "Resultado de la operación pedante: " . $operacionPedante . "<br>". "<br>";

// Operadores de asignación
print ("<h1> Operadores de asignación </h1>");
$num = 20;
echo "Valor inicial: " . $num . "<br>";

$num += 10; // Equivale a $num = $num + 10
echo "Valor después de +=: " . $num . "<br>";

$num -= 5; // Equivale a $num = $num - 5
echo "Valor después de -=: " . $num . "<br>";

$num *= 2; // Equivale a $num = $num * 2
echo "Valor después de *=: " . $num . "<br>";

$num /= 4; // Equivale a $num = $num / 4
echo "Valor después de /=: " . $num . "<br>";

$num %= 3; // Equivale a $num = $num % 3
echo "Valor después de %=: " . $num . "<br>" . "<br>";

// operadores de comparación
print ("<h1> Operadores de comparación </h1>");
$a = 25;
$b = 16;
var_dump ($a == $a); // Igualdad
echo "<br>";
var_dump ($a === $b); // Igualdad estricta
echo "<br>";
var_dump ($a != $b); // Desigualdad
echo "<br>";
var_dump ($a > $b); // Mayor que
echo "<br>";
var_dump ($a < $b); // Menor que
echo "<br>";
var_dump ($a >= $b); // Mayor o igual que
echo "<br>";
var_dump ($a <= $b); // Menor o igual que
echo "<br>";

// Operadores lógicos
print ("<h1> Operadores lógicos </h1>");
$num1 = 15;
$num2 = 20;
var_dump($num1 == 15 && $num2 == 20); // AND lógico
var_dump($num1 < 10 && $num2 > 15); // AND lógico
echo "<br>";
var_dump($num1 != 10 || $num2 < 10); // OR lógico
echo "<br>";
var_dump(!($num1 == 30)); // NOT lógico
echo "<br>";   


// opeardores de incremento y decremento
print ("<h1> Operadores de incremento y decremento </h1>");

$FirstNumber = 10;
$result = $FirstNumber++;
print("el valor de result es: " . $result); // Imprime 10, luego incrementa a 11
echo "<br>";
print("el valor de FirstNumber es: " . $FirstNumber);
echo "<br>". "<br>";


$secondNumber = 5;
$result2 = ++$secondNumber;
print("el valor de result2 es: " . $result2); // Incrementa a 12, luego imprime 12
echo "<br>";
print("el valor de secondNumber es: " . $secondNumber);
echo "<br>" . "<br>";

$thirdNumber = 15;
$result3 = $thirdNumber--;
print("el valor de result3 es: " . $result3); // Decrementa a 14, luego imprime 14
echo "<br>";
print("el valor de thirdNumber es: " . $thirdNumber);
echo "<br>" . "<br>";

$fourthNumber = 20;
$result4 = --$fourthNumber;
print("el valor de result4 es: " . $result4); // Decrementa a 19, luego imprime 19
echo "<br>";
print("el valor de fourthNumber es: " . $fourthNumber);


?>