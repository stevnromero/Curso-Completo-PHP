<?php 

// Guardar que ya votó
if(isset($_COOKIE['lenguaje'])){
    $lenguaje = $_COOKIE['lenguaje'];
    echo "Ya has votado anteriormente: $lenguaje";
}

elseif(isset($_POST['lenguaje'])){
    $lenguaje = $_POST['lenguaje'];
    setcookie("lenguaje", $lenguaje, time() + 3600);
    echo "Se ha guardado su voto";
}
else{
    echo "No has votado aún";
}

echo "<br>";

// mostrar: tu voto fue
if(isset($_COOKIE['lenguaje'])){
    echo "TU VOTO FUE: " . $_COOKIE['lenguaje'];
}

echo "<br>" . "<br>";

// // conteo de votos 
$conteo = array(
    "PHP" => 3,
    "JavaScript" => 2,
    "Python" => 1
);

foreach($conteo as $key => $value){
    echo "$key: $value <br>";
}

