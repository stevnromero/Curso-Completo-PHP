<?php 

// WHILE Y DO WHILE

/*
$counter = 1;
$nombre = "Carolina";

while ($counter <= 10){
    echo 'Hola ' . $nombre . '. Como estas?' . PHP_EOL;
    $counter++;
}

echo "Te sales del bucle!";

echo PHP_EOL;

$counter2 = 1;

do {
    echo "hola mundo" . PHP_EOL;
    $counter2++;
} while ($counter2 < 5);



// FOR

for ($i = 1; $i <= 5; $i++) {
    echo "Hola mundo " . $i . PHP_EOL;
}

for ($i = 1; $i <= 10; $i++){
    echo "Tabla del " . $i . PHP_EOL;
    for($j = 1; $j <= 10; $j++){
        echo $i . " X " . $j . " = " . ($i * $j) . PHP_EOL;
    }
    echo "///////////////////////////////////////" . PHP_EOL;
}


// foreach
$animals = ["Perro", "Gato", "Pájaro", "Conejo"];

foreach($animals as $animal){
    echo $animal . PHP_EOL;
}


$dulces = ["Nucita", "Chocoramo", "Bon Bon Bum", "Frunas"];

foreach($dulces as $dulce => $value){
    echo "El dulce " . $value . " tiene el indice " . $dulce . PHP_EOL;
}
*/


$i = 1;
$animals = ["perro", "gato", "loro", "elefante"];

while ($i <= 3){
    
    foreach($animals as $animal => $valor){
        echo "$animal : $valor" . PHP_EOL;
    }
    echo "saliste del bucle" . PHP_EOL . PHP_EOL;  
    $i++;

    if($i == 3){
        break;
    }
}