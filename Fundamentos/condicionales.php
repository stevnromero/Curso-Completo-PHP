<?php
/*
$frase = "Hola Carolina. Te quiero mucho.";

if($frase == "Hola Carolina. Te quiero mucho.") {
    echo "<b>La frase es correcta.</b> <br> <br>"; // cumple la condición
}

$edad = 52;

print("<h1>Diferenciación de edades.</h1>");
if($edad < 17){
    echo "Eres menor de edad.";
} elseif($edad >= 18 && $edad < 50){
    echo "Eres un adulto joven.";
} else {
    echo "Eres un adulto mayor.";
}

echo "<br> <br>";

$animal = "perro";
$heightDog = 70;
$animal2 = "elefante";
$heightElephant = 300;

if ($heightDog > $heightElephant){
    echo ("El " . $animal . " es más pequeño que el " . $animal2 . ".");
}else {
    echo ("El " . $animal2 . " es más grande que el " . $animal . ".");
}



// OPERADORES TERNARIOS

$edad = 19;

$mensaje = ($edad >= 18) ? "Acceso permitido" : "Acceso denegado";
echo $mensaje;

echo PHP_EOL;

$mensaje2 = ($edad > 0) ?  "Edad válida" : "Edad inválida";
echo $mensaje2;

$nota = 75; 

$resultado = ($nota >= 90) ? "Excelente" : 
(($nota > 70 && $nota < 90) ? "Aprobado"  : 
(($nota >= 0 && $nota < 70) ? "Reprobado" : 
"Nota inválida"));
echo $resultado;*/


// SWITCH

/*$color = "Rojo"; 

switch ($color){
    case "Rojo":
    echo "Color primario";
    break;

    case "Azul":
    echo "Color primario";
    break;

    case "Verde":
    echo "Color secundario";
    break;

    default:
    echo "Color desconocido";
}

$nota = 50;

switch (true){
    case ($nota >= 90):
    echo "Excelente";
    break;

    case ($nota >= 70 && $nota <= 89):
    echo "Aprobado";
    break;

    case ($nota >= 0 && $nota <= 69):
    echo "Reprobado";
    break;

    default: 
    echo "Nota inválida";
}*/

// MATCH

$dia = 4;

echo match($dia){
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sabado",
    7 => "Domingo",

    default => "Día inválido"
};

echo PHP_EOL;


$extension = "mp4";

$tipo = match ($extension){
    "jpg", "png", "gif" => "Imagen",
    "mp3", "wav" => "Audio",
    "mp4", "avi" => "Video",

    default => "Desconocido"
};
echo $tipo;

echo PHP_EOL;



$dia = "Domingo";
$hora = 12;

echo match (true){
    $dia == "lunes" || $dia == "Martes" || $dia == "Miercoles" || $dia == "Jueves" || $dia == "Viernes" && $hora < 18 => "Horario Laboral",
    $dia == "lunes" || $dia == "Martes" || $dia == "Miercoles" || $dia == "Jueves" || $dia == "Viernes" && $hora >= 18 => "Fuera de horario",
    $dia == "Sabado" ||  $dia == "Domingo" => "Fin de semana",

    default => "Datos inválidos"
};


echo PHP_EOL;


$a = (int) "10";
$b = 2;

echo match (true) {
    !is_numeric($a) || !is_numeric($b)
        => "Valores inválidos",

    $b === 0
        => "Error: división por cero",

    default
        => "El resultado es: " . ($a / $b)
};


echo PHP_EOL;

$dia = strtolower($dia);

echo match (true) {
    in_array($dia, ["lunes","martes","miercoles","jueves","viernes"]) && $hora < 18
        => "Horario laboral",

    in_array($dia, ["lunes","martes","miercoles","jueves","viernes"]) && $hora >= 18
        => "Fuera de horario",

    in_array($dia, ["sabado","domingo"])
        => "Fin de semana",

    default => "Datos inválidos"
};
?>


