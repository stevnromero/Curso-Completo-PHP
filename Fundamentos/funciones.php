<?php 
/*
// funciones internas
echo "el valor absoluto es: " . abs(-25) . "\n";
echo "el valor redondeado es: " . round(3.80) . "\n";
echo "el valor redondeado hacia arriba es: " . ceil(2.15) . "\n";
echo "el valor redondeado hacia abajo es: " . floor(5.68) . "\n";
echo "la raiz cuadrada es : ". sqrt(81) . "\n";
echo "la raiz cubica es: ". pow(8, 1/3) . "\n";
echo "numero aleatorio es: " . rand(50, 70) . "\n";
echo "aleatorio mas eficiente es: " . mt_rand(80,90) . "\n";


// FUNCIONES TRIGONOMETRICAS


// convertir grados a radianes
$grados = 90;
$radianes = $grados * pi() / 180;
print ($radianes) . PHP_EOL;

// convertir radianes a grados
$radian = pi();
$grados = $radian * 180 / pi();
print ($grados) . PHP_EOL;


// seno


$grados = 75;
$radianes = deg2rad($grados);
$seno = sin($radianes);
echo "el resultado de seno es: " . $seno . "\n" . "\n";



$angulos = [10, 20, 30, 40, 50];

foreach($angulos as $angulo){
    $radianes = $angulo * pi() / 180;
    $seno = sin($radianes);
    echo "Seno de $angulo es: " . $seno . PHP_EOL;
}



$angulo = 120;
$radian = deg2rad($angulo);
$coseno = cos($radian);
$redondeado = round($coseno, 4);
echo PHP_EOL . "el resultado del coseno es: " . $redondeado;

*/

/*function _fraseToday(){
    echo "Mi nombre es Johan y trabajo para Operative Research SAS" . "\n";
}
_fraseToday();*/


/*function calcularPromedio($nota1 = 78, $nota2 = 34, $nota3 =45 ){
    $promedio = $nota1 + $nota2 + $nota3;
    echo "el promedio final es: " . round($promedio / 3) . PHP_EOL;
}
calcularPromedio(80,90,76);
calcularPromedio();

function calcularSalarioFinal($salarioBase, $bono = 0){
    $finalSalary = $salarioBase + $bono;
    echo "el salario final es: " . $finalSalary . PHP_EOL;
}
calcularSalarioFinal(1700000);
calcularSalarioFinal(1300000, 200000);*/


// RETURN

/*
Ejercicio 1: Calcular descuento
Objetivo: Practicar return devolviendo un valor numérico.

Enunciado
Crea una función llamada calcularDescuento que:

Reciba:

$precio
$porcentaje
Calcule el descuento.
Retorne el precio final con el descuento aplicado.
No debe usar echo dentro de la función.
*/

/*
function calcularDescuento($precio, $porcentaje = 25){
    $descuento = $precio - $precio * $porcentaje / 100 . PHP_EOL;
    return "El precio final es: $descuento";
}
$descuento = calcularDescuento(500000, 35);
$descuento2 = calcularDescuento(350000);
echo $descuento;
echo $descuento2;

// ambitos globales

$a = 12;
function calcularSuma(){
    global $a;
    echo PHP_EOL . $a + 15 . PHP_EOL;
    echo __FUNCTION__;
}
calcularSuma();


$frase = "Es hora de trabajar";

function today(){
    echo var_dump($GLOBALS["frase"]) . PHP_EOL;
}
today();

*/

/*
$server1 = $_SERVER['PHP_SELF'];
$server2 = $_SERVER['SERVER_NAME'];
$server3 = $_SERVER['HTTP_HOST'];
$server4 = $_SERVER['SCRIPT_NAME'];
$server5 = $_SERVER['REMOTE_ADDR'];
$server6 = $_SERVER['DOCUMENT_ROOT'];

function servers(){
    global $server1;
    echo $server1 . PHP_EOL;
    global $server2;
    echo "El host es: " . $server2 . PHP_EOL;
    global $server3;
    echo "El host es: " . $server3 . PHP_EOL;
    global $server4;
    echo "El nombre del script es: " . $server4 . PHP_EOL;
    global $server5;
    echo "La dirección IP del cliente es: " . $server5 . PHP_EOL;
    global $server6;
    echo "El directorio raíz del documento es: " . $server6 . PHP_EOL;


}
servers();





function today(...$palabras){

    foreach($palabras as $palabra){
        echo "Hoy aprendí: " . $palabra . PHP_EOL;
    }
    
}
today('php', 'python', 'JS');
*/

// funciones tipadas


function multiplicar(int $num1, int $num2){
    return $num1 * $num2 . PHP_EOL ;
}
$resultado = multiplicar(12, "20");
echo $resultado;
