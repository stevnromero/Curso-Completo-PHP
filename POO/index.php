<?php


/*
use App\Modelos\Tarea;
use App\Servicios\Gestor;

spl_autoload_register(function($clase){
    // Quitar prefijo App\
    $clase = str_replace("App\\", "", $clase);

    // Convertir a ruta
    $ruta = __DIR__ . "/src/" . str_replace("\\", "/", $clase) . ".php";

    if (is_file($ruta)) {
        require_once $ruta;
    } else {
        echo "No se encontró: $ruta" . PHP_EOL;
    }
}

);


$tar = new Tarea("Comprar pan");
$tar->mostrar();

$gestor = new Gestor;
$gestor->agregar($tar);
$gestor->listar();




spl_autoload_register(function($clase){
    echo "Intentando cargar: $clase" . PHP_EOL;
    require_once($clase . ".php");
});

$mensaje = new Logger;
$mensaje->agregar("Hola");
$mensaje->agregar("Adiós");
$mensaje->ultimo() . PHP_EOL;




use App\Util\Texto;

spl_autoload_register(function($clase){
    $clase = "\\App\\Util\\Texto";
    $limpio = ltrim($clase, "App\\");
    $ruta = __DIR__ . "/src/" . str_replace("\\", "/", $limpio) . ".php";

    if(is_file($ruta)){
        require_once($ruta);
    } else {
        echo "no existe";
    }
});


$text = new Texto;
$text -> mayus("mi mejor amiga es alejandra");



$sis = new Seguridad;
$sis -> iniciar();


/////////////////////////////////////////////////////////////////


use App\Servicios\EmailServicio;

spl_autoload_register(function($clase){
    $clean = ltrim($clase, "App\\");
    $ruta = __DIR__ . "/src/" . str_replace("\\", "/", $clean) . ".php";
    
    if(is_file($ruta)){
        require_once($ruta);
    } else {
        echo "No se encontró: $ruta" . PHP_EOL;
    }
    
});

$ser = new EmailServicio;
$ser -> ejecutar();

*/