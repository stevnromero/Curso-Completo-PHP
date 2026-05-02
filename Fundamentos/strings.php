<?php

$cadena = "Hola, mi nombre es Johan";
echo $cadena . PHP_EOL;
echo $cadena[2] . "\n";
echo strlen($cadena) . PHP_EOL;
echo str_word_count($cadena) . PHP_EOL;
echo strpos($cadena, "a") . PHP_EOL;
echo strrpos($cadena, "a") . PHP_EOL;
//echo str_contains($cadena, "Hola")? "SI SE ENCUENTRA" : "NO SE ENCUENTRA";
//echo str_starts_with($cadena, "Hola") ? "SI SE ENCUENTRA" : "NO SE ENCUENTRA";
//echo PHP_EOL . str_ends_with($cadena, "Johan")? "SI SE ENCUENTRA" : "NO SE ENCUENTRA";



$phrase = "operative research es una buena empresa";
echo strtoupper($phrase) . PHP_EOL;



$animals = ["PERRO", "GATO", "LORO"];

foreach($animals as $animal){
    echo strtolower($animal) . PHP_EOL;
}


// conversion de mayusculas y minusculas
$texto = "los estudios de ipsos son pesados";
echo ucfirst($texto) . PHP_EOL;
echo ucwords($texto) . PHP_EOL;



$fullName = "johan romero";
$convert = ucwords($fullName);
echo strrev($convert) . PHP_EOL;


$acusacion = "yo no le toqué la cola a las dos culicagadas";
echo str_replace("dos culicagadas", "niñas", $acusacion) . PHP_EOL;

$space = "       hola mundo!       ";
echo trim($space) . PHP_EOL;

$saludos = "hola qiubo hello what's_up";
echo print_r(explode(" ", $saludos)) . PHP_EOL;



$text = "Hola a todos! bienvenidos a programming.";
echo substr($text, 14, 11) . PHP_EOL;
echo substr($text, -12, 7) . PHP_EOL;
echo substr($text, 7, -16) . PHP_EOL;


$palabra = "Hola";
$palabra2 = "Hola";
echo strcmp($palabra, $palabra2) . PHP_EOL;


$animal= "perro";
$animal2 = "perro";
echo strcasecmp($animal, $animal2) == 0 ? "son iguales" : "son diferentes" . PHP_EOL;


$simple = "esta comida es \'exquisita\' ";
echo $simple . PHP_EOL;

echo "\$mundos" . PHP_EOL;
echo "\n" . "hola\nmundo" . PHP_EOL . PHP_EOL;
echo "I have a stom\tachake" . PHP_EOL . "\n";
echo "holla\ra todos" . PHP_EOL;



