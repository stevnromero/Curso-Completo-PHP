<?php
/*$animals = array("perro", "gato", "león");

echo $animals[1] = "rinoceronte" . PHP_EOL; // cambiar el elemento
echo $animals[2] . PHP_EOL; // acceder a un elemento especifico
echo $animals[3] = "conejo" . PHP_EOL . PHP_EOL; // agregar un elemento
echo var_dump($animals) . PHP_EOL; // imprimir todos los valores del contenido array

$dates = array("name" => "Johan", "age" => 22, "maritalStatus" => "Single");
echo $dates["name"] . PHP_EOL; // acceder al elemento, consultando con el nombre
echo $dates["name"] = "Steven" . PHP_EOL; // cambiar el elemento con el nombre 
echo $dates["team"] = "Fc Barcelona" . PHP_EOL; // agregar el elemento con el nombre

foreach($dates as $x => $y){
    echo "$x : $y" . PHP_EOL;
}



$teams = [];
$teams[0] = "Barcelona";
$teams[1] = "Real madrid";
$teams[2] = "Atletico Madrid";
echo print_r($teams) . PHP_EOL;



$empleados = [
    [
        'nombre' => 'Pablo Rozo',
        'edad' => 22,
        'ocupacion' => 'Auxiliar de Bodega',
        'jornada' => [
            'diurna' => '6am a 12pm'
        ]
    ],

    [
        'nombre' => 'Oscar Osorio',
        'edad' => 50,
        'ocupacion' => 'Guardia de seguridad',
        'jornada' => [
            'madrugada' => '6pm a 5am'
        ]
    ]
];

echo $empleados[0]['nombre'] . PHP_EOL;
echo $empleados[0]['jornada']['diurna'] . PHP_EOL;
echo $empleados[0]['ciudad'] = 'Bogotá D.C.' . PHP_EOL . PHP_EOL;
echo print_r($empleados) . PHP_EOL . PHP_EOL;


$listas = [
    ["pera", "manzana", "mora"],
    ["kiwi", "banana", "melocotón"],
    ["fresa", "sandía"]
];

echo $listas[1][0] . PHP_EOL;
echo $listas[2][2] = "piña" . PHP_EOL;
echo $listas[0][2] = "durazno" . PHP_EOL;
echo print_r($listas) . PHP_EOL . PHP_EOL;

foreach($listas as $fruit){
    echo $fruit[1] . PHP_EOL . PHP_EOL;
}

echo print_r($listas);


$lista = array("barcelona" , "real madrid", "juventus");
list($a, $b, $c) = $lista;
echo $a . PHP_EOL;


// agregar elementos a un array

$european_teams = ["barcelona", "real madrid"];
$european_teams [] = "juventus";
$european_teams [] = "liverpool";
echo print_r($european_teams) . PHP_EOL;



$vegetables = ["banana", "manzana"];
array_push($vegetables, "pera", "lulo", "kiwi");
echo print_r($vegetables) . PHP_EOL;



$sports = ["nombre_cliente" => "pablo menuza"];
$sports += ["producto" => "zapatillas", "marca" => "nike"];
echo var_dump($sports) . PHP_EOL;


$bebidas = array("soda", "jugos");
array_unshift($bebidas, "té", "cerveza");
echo var_dump($bebidas) . PHP_EOL;

$ingenierias = ["sistemas", "electronica", "industrial"];
array_splice($ingenierias, 1, 0, ["mecatronica"]);
echo print_r($ingenierias) . PHP_EOL;


// eliminar elementos de un array
$canalesTV = ["rcn", "caracol tv", "cityTV", "televisa", "TNT"];
array_splice($canalesTV, 1, 2);
echo print_r($canalesTV) . PHP_EOL;



$ropa = ["camiseta", "jeans", "sweaters",  "zapatos"];
unset($ropa[2]);
echo print_r ($ropa) . PHP_EOL;



$soccerPlayer = ['fullName' => 'lionel messi', 'age' => 39, 'team' => 'Inter Miami'];
unset($soccerPlayer['age']);
echo print_r ($soccerPlayer) . PHP_EOL;



$consolasGame = ['xbox series', 'ps5', 'nintendo switch', 'wii'];
$delete = ['ps5', 'wii'];
echo print_r(array_diff($consolasGame, $delete)) . PHP_EOL . PHP_EOL;

$wrestler = ['fullName' => 'John cena', 'wwe_titles' => 17, 
            'age' => 48, 'nationallity' => 'american'];

$delete2 = ['age' => 48, 'wwe_titles' => 17];

echo print_r(array_diff($wrestler, $delete2)) . PHP_EOL . PHP_EOL;



$devices = array('laptop', 'desktop', 'printer', 'Smartphone');
$remove = array_pop($devices);
$remove2 = array_shift($devices);
echo var_dump($remove) . PHP_EOL;
echo var_dump($remove2) . PHP_EOL . PHP_EOL;


$vegetales = ['pepino', 'alcelga', 'higado', 'brocoli'];
sort($vegetales);
echo var_dump($vegetales) . PHP_EOL . PHP_EOL; 



// ordenamiento de arrays

$numeros = array(34,52,7,23);
rsort($numeros);
echo print_r($numeros) . PHP_EOL . PHP_EOL;

$soccerplayer = ['player1' => 'Lionel Messi', 'player2' => 'Neymar jr', 'player3' => 'Kylian Mbappé',
                 'player4' => 'Cristiano Ronaldo', 'player5' => 'Lamine Yamal'];
asort($soccerplayer);
echo print_r($soccerplayer) . PHP_EOL . PHP_EOL;





$dulces = ['dulce3' => 'trululu', 'dulce1' => 'jet', 
           'dulce4' => 'bon bon bum', 'dulce2' => 'mammut'];
ksort($dulces);
echo print_r($dulces) . PHP_EOL . PHP_EOL;
arsort($dulces);
echo print_r($dulces) . PHP_EOL . PHP_EOL;



$languages = array('lang1' => 'english', 'lang3' => 'spanish', 
                   'lang4' => 'portuguese', 'lang2' => 'german');
krsort($languages);
echo print_r($languages) . PHP_EOL . PHP_EOL;



$lista = array('Material' => 'Cuero', 'MATERIAL' => 'Lona');
$result = array_change_key_case($lista, CASE_LOWER);
echo print_r($result) . PHP_EOL . PHP_EOL;

$lista = array('Cuero', 'Lona', 'tela', 'madera');
$result = array_chunk($lista, 2,true);
echo print_r($result) . PHP_EOL . PHP_EOL;



$lista_alumnos = [
    array('id' => '1000856335', 'nombre' => 'johan', 'nivel' => 'tegnologo'),
    array('id' => '5425412524', 'nombre' => 'helena', 'nivel' => 'tegnologo'),
    array('id' => '1205395030', 'nombre' => 'alejandro', 'nivel' => 'tegnologo'),
];

$result = array_column($lista_alumnos, 'nombre');
$result2 = array_column($lista_alumnos, 'nombre', 'id');
echo print_r($result) . PHP_EOL . PHP_EOL;
echo print_r($result2) . PHP_EOL . PHP_EOL;



$key = array('id', 'fullName', 'team');
$value = array('9843468', 'Robert Lewandoski', 'FC Bayern Munchen');
echo print_r(array_combine($key, $value)) . PHP_EOL . PHP_EOL;

$frutas = array('pera', 'banana', 'pera', 'melon', 'melon', 'pera');
echo print_r(array_count_values($frutas)) . PHP_EOL . PHP_EOL;


$a = [1,2,3,4,5];
$b = [1,2];
$c = [5];

$resultado = array_diff($a, $b, $c);
echo print_r($resultado) . PHP_EOL . PHP_EOL;


$dict = array('nombre' => 'johan', 'edad' => 22, 'estatura' => '1.60cm',
              'estadoCivil' => 'soltero', 'ocupacion' => 'estudiante');

$dict2 = array('estadoCivil' => 'soltero', 'estatura' => '1.60cm');
$result = array_diff_assoc($dict, $dict2);
echo print_r($result) . PHP_EOL . PHP_EOL;



$dict = array('nombre' => 'johan', 'edad' => 22, 'estatura' => '1.60cm',
              'estadoCivil' => 'soltero', 'ocupacion' => 'estudiante');

$dict2 = array('estadoCivil' => 'casado', 'ocupacion' => 'empleado');
$dict3 = array('edad' => 14, 'empresa' => 'operative research');
$result = array_diff_key($dict, $dict2, $dict3);
echo print_r($result) . PHP_EOL . PHP_EOL;


$array = array ('a' => 'perro' , 'b' => 'gato', 'c' => 'loro', 'd' => 'gallina');
$array2 = array('a' => 'perro', 'b' => 'gato', 'c' => 'loro');

function animals($a, $b){
    if ($a == $b){
        return "son iguales";
    }
}
$result = array_intersect_uassoc($array, $array2, "animals");
echo print_r($result) . PHP_EOL . PHP_EOL;



$array = array ('a' => 'perro' , 'b' => 'gato', 'c' => 'loro', 'd' => 'gallina');
$array2 = array('a' => 'perro', 'b' => 'gato', 'c' => 'loro');

function animals2($a, $b){
    if ($a == $b){
        return "son iguales";
    }
}
$result = array_intersect_uassoc($array, $array2, "animals2");
echo print_r($result) . PHP_EOL . PHP_EOL;




$lista = array('a' => 'mouse', 'b' => 'laptop', 'c' => 'smartphone');
$lista2 = array('a' => ' ','b' => 'SSD disk');

function devices($a, $b){
    return strcmp($a, $b);
}
$result = array_diff_ukey($lista, $lista2, "devices");
echo print_r($result) . PHP_EOL . PHP_EOL;



$lista = ["messi", "cristiano ronaldo", "ronaldinho"];
echo print_r(array_fill(3, 3, $lista[2])) . PHP_EOL . PHP_EOL;




$legends = array("maradona", "pelé", "johan cruyff");
echo var_dump(array_fill_keys($legends, "passed away")) . PHP_EOL . PHP_EOL;





$numeros = [1,5,9,14,28];
$result = array_filter($numeros, function($a){
    return $a >= 14;
});
echo print_r($result) . PHP_EOL . PHP_EOL;




$datos = array('nombre' => 'johan', 'edad' => 22, 'ocupacion' => 'estudiante');
$result = array_flip($datos);
echo var_dump($result) . PHP_EOL . PHP_EOL;




$teams = array('barcelona', 'juventus', 'real madrid', 'liverpool');
$teams2 = array('barcelona', 'liverpool');
$result = array_intersect($teams, $teams2);
echo print_r($result) . PHP_EOL . PHP_EOL;







$teams = array('team1' => 'barcelona', 'team2' => 'juventus', 'team3' => 'psg', 'team4' => 'liverpool', 'team5' => 'real madrid');
$teams2 = array('team1' => 'barcelona', 'team3' => 'psg');
$teams3 = array('team1' => 'barcelona', 'team5' => 'arsenal', 'team3' => 'psg' );
$result = array_intersect_assoc($teams, $teams2, $teams3);
echo print_r($result). PHP_EOL . PHP_EOL;



$letters = array('a' => 'python', 'b' => 'html', 'c' => 'javascript', 'd' => 'ruby');
$letters2 = array('a' => 'cibersecurity', 'c' => 'c++');
$letters3 = array('a' => 'java', 'c' => 'rust');

*/





/*function compared($a, $b){
    return strcmp($a, $b);
}
$result = array_intersect_ukey($letters, $letters2, $letters3, "compared");
echo print_r($result) . PHP_EOL . PHP_EOL;*/






/*$letters = array('a' => 'python', 'b' => 'html', 'c' => 'javascript', 'd' => 'ruby');
$letters2 = array('a' => 'cibersecurity', 'c' => 'c++');
$letters3 = array('a' => 'java');
$result = array_intersect_key($letters, $letters2, $letters3);
echo var_dump($result) . PHP_EOL . PHP_EOL;



$jugador = array('nombre' => 'lamine yamal', 'edad' => (int)'22', 'equipo' => 'Fc barcelona');
echo var_dump(array_key_exists('nombre', $jugador)) . PHP_EOL;
echo var_dump(isset($jugador['nombre'])). PHP_EOL . PHP_EOL;




$numeros = [1, 3, 5, 7];
$result = array_map(function($a){
    return $a * 2;
}, $numeros);
echo print_r($result) . PHP_EOL . PHP_EOL;



$aprendices = array('sebastian', 'carolina', 'jairo', 'julián');
$result = array_map(function($a){
    return "el aprendiz es: $a";
}, $aprendices);
echo print_r($result) . PHP_EOL . PHP_EOL;


$aprendices = array('sebastian', 'carolina', 'jairo', 'julián');
$estudios = ['hoteleria', 'electronica', 'finanzas', 'software'];
$result = array_map(function($a, $b){
    return "$a estudia $b";
}, $aprendices, $estudios);
echo print_r($result) . PHP_EOL . PHP_EOL;





$aprendiz = array('nombre' => 'johan', 'edad' => 22, 'formacion' => 'software' , 'estadoCivil' => 'soltero');
$aprendiz2 = array('nombre' => 'dayana', 'edad' => 29, 'formacion' => 'electronica');
$result = array_merge_recursive($aprendiz, $aprendiz2);
echo print_r($result) . PHP_EOL . PHP_EOL;






$fastFood = array('pizza', 'empanadas' ,'hambuger', 'french fries'); 
$even = array(12, 20, 4, 8);
array_multisort($fastFood, SORT_DESC, SORT_STRING, $even, SORT_DESC, SORT_NUMERIC);
echo print_r($fastFood) . PHP_EOL . PHP_EOL;
echo print_r($even) . PHP_EOL . PHP_EOL;




$pares = array('2', 4, 6);
$result = array_product($pares);
echo $result . PHP_EOL . PHP_EOL;






$colombian_teams = ['millonarios', 'santa fé', 'atletico nacional', 'junior'];
$result = array_rand($colombian_teams, 2);
echo var_dump($result) . PHP_EOL . PHP_EOL;
 


$frase = array('hoy', 'es', 'semana', 'santa');
$result = array_reduce($frase, function($acum, $valor){
    return $acum . " " . $valor;
}, 'Normalmente,');
echo var_dump($result) . "\n";


$numeros = [1, 2, 3, 4];
$result = array_reduce($numeros, function ($acum, $valor){
    return $acum + $valor;
}, 2.5);
echo var_dump($result) . "\n";



$animales = array('a' => 'perro', 'b' => 'oso', 'c' => 'elefante');
$animales2 = array('a' => 'leopardo', 'c' => 'camel', 'd' => 'zebra');

$result = array_replace($animales, $animales2);
echo print_r($result) . PHP_EOL . PHP_EOL;







$sena = ['aprendiz' => [
    'nombre' => 'dayanna',
    'edad' => 23,
    'formacion' => 'patronaje'
]];

$sena2 = ['aprendiz' => [
    'nombre' => 'samuel',
    'edad' => 27,
    'estadoCivil' => 'soltero'
]];
$result = array_replace_recursive($sena, $sena2);
echo print_r($result) . PHP_EOL . PHP_EOL;






$numeros = array(1,11,6,9);
$result = array_reverse($numeros, true);
echo print_r($result) . PHP_EOL . PHP_EOL;

$employee = array(
    'name' => 'juan david',
    'age' => 34,
    'nationallity' => 'peruvian',
    'maritalStatus' => 'single'
);
ksort($employee);
$result = array_reverse($employee);
echo print_r($result) . PHP_EOL . PHP_EOL;



$vegetales = array('ahullama', 'pepino', 'brocoli');
$resultado = array_search('pepino', $vegetales, true);
echo var_dump($resultado);

$persona = array(
    'nombre' => 'steven',
    'edad' => 23,
    'estadoCivil' => 'soltero'
);

$resultado = array_search('steven', $persona, true);
echo var_dump($resultado) . PHP_EOL . PHP_EOL;



$vehiculos = array('carro', 'bus', 'moto', 'bicicleta');
$resultado = array_slice($vehiculos, -4, 2, true);
echo print_r($resultado) . PHP_EOL . PHP_EOL;





$numeros = [10, 3, 6, '3'];
$numeros2 = [is_numeric("texto"), 5, 8];
$resultado = array_sum($numeros);
$resultado2 = array_sum($numeros2);
echo var_dump($resultado, $resultado2);







$numeros = array(1, 2, 3, 4, 5);
$numeros2 = array(1, 3);
$numeros3 = array(5);


/*function number($a, $b){
    return $a <=> $b;
};

$resultado = array_udiff($numeros, $numeros2, $numeros3, "number");
echo print_r($resultado) . PHP_EOL . PHP_EOL;





$a = array('luchador' => 'triple h', 'edad' => 56, 'estatura' => '1.93cm', 'wwe_titulos' => 14);
$b = array('edad' => 56);
$c = array('estadoCivil' => 'casado', 'estatura' => '1.93cm');

$resultado = array_udiff_assoc($a, $b, $c, function ($x, $y){
    return strcmp($x, $y);
});
echo print_r($resultado);





$seafood = array('1' => 'cazuela', '2' => 'ceviche', '3' => 'bocachico', '4' => 'salmón');
$seafood2 = array('1' => 'cazuela', '4' => 'salmón');

function fish($a, $b){
    return strcmp($a, $b);
}

$resultado = array_uintersect_assoc($seafood, $seafood2, 'fish');
echo print_r($resultado);




/*$spainTeams = array('1' => 'barcelona', '2' => 'real madrid', '3' => 'atletico madrid',
                    '4' => 'villareal', '5' => 'real sociedad');

$spainTeams2 = array('1' => 'barcelona', '2' => 'real madrid');
$spainTeams3 = array('2' => 'real madrid', '4' => 'villareal');

$result = array_uintersect_uassoc($spainTeams, $spainTeams2, $spainTeams3,
        function($v1, $v2){
            return $v1 <=> $v2;
        },
        function($k1, $k2){
            return $k1 <=> $k2;
        }
);

echo print_r($result) . "\n";
*/    


$programacion = ['python', 'javascript', 'c++', 'python', 'c++'];
$resultado = array_unique($programacion, SORT_STRING);
echo print_r($resultado) . PHP_EOL . PHP_EOL;



$programacion2 = ['python', 'javascript', 'c++', 'python', 'c++'];
$resultado2 = array_values($programacion);
echo print_r($resultado2) . PHP_EOL . PHP_EOL;



$englishTeam = array('a' => 'chelsea', 'b' => 'arsenal', 'c' => 'liverpool', 'd' => 'chelsea');
$result = array_values(array_unique($englishTeam));
print var_dump($result) . PHP_EOL . PHP_EOL;




$animales = array('gato', 'leopardo', 'buey', 'elefante');
function animal($valor, $clave){
    echo "el animal n.$clave es $valor" . "\n";
};
array_walk($animales, "animal");



$numeros_pares = array(rand(1, 10));
function producto(&$value, $key){
    echo 'el resultado es: ' . ($value * 3). "\r";
};
array_walk($numeros_pares, "producto");



$numeros = [
    array('a' => 2),
    array(4, 6),
    array('b' => [10, 20])
];

function multiply(&$valor){
    $valor = "El resultado es: " . ($valor * 2) . PHP_EOL;
};

array_walk_recursive($numeros, "multiply");
echo var_dump($numeros);



$aprendiz = array('johan', 'mateo', 'paulina', 'ernesto');
echo count($aprendiz, COUNT_NORMAL) . "\r";

$jugador = [
    'nombre' => 'lionel messi',
    'edad' => 23,
    'nacionalidad' => 'argentino',
];


if (count($jugador) > 0) {
    echo "Hay datos del jugador";
};



$cantantes = array('the weeknd', 'shakira', 'bad bunny');
echo var_dump(current($cantantes)) . "\r";



// ejemplo basico
$frutas = array('a' => 'banana', 'b' => 'manzana');
extract($frutas);
echo var_dump($a);
echo var_dump($b); 


// EXTR_OVERWRITE
$animal = 'jirafa';
function animals(){
    global $animal;
    $animales = array('animal' => 'perro', 'animal2' => 'gato');
    extract($animales, EXTR_OVERWRITE);
    echo var_dump($animal);
};
animals();


// EXTR_SKIP
$uni1 = 'manuela beltrán';
$lista_universidades = array('uni1' => 'CUN', 'uni2' => 'politécnico');
extract($lista_universidades, EXTR_SKIP);
echo var_dump($uni1);


// EXTR_PREFIX_ALL
$idiomas = array('1' => 'inglés', '2' => 'francés');
extract($idiomas, EXTR_PREFIX_ALL, "idiom");
echo var_dump($idiom_1);
echo var_dump($idiom_2);


// EXTR_PREFIX_IF_EXISTS
$nombre = 'tania';
$aprendiz = array('nombre' => 'samuel', 'formacion' => 'música');
extract($aprendiz, EXTR_PREFIX_IF_EXISTS, "nuevo");
echo var_dump($nuevo_nombre);
echo var_dump($formacion);


// EXTR_PREFIX_INVALID
$colores = array('1' => 'azul', '2' => 'rojo');
extract($colores, EXTR_PREFIX_INVALID, "color");
echo var_dump($color_1);


// EXTR_IF_EXISTS
$name = " ";
$soccerPlayers = array('name' => 'ronaldinho', 'edad' => intVal('46'));
extract($soccerPlayers, EXTR_IF_EXISTS);
echo var_dump($name);


// EXTR_PREFIX_SAME
$team = "real madrid";
$teams = array('team' => 'barcelona', 'titles' => 105);
extract($teams, EXTR_PREFIX_SAME, "spain");
echo var_dump($spain_team);



$europa = array('francia', 'españa', '1');
$resultado = in_array('francia', $europa);
$resultado2 = in_array(1, $europa, true);
echo var_dump($resultado);
echo var_dump($resultado2);



$europa2 = array('euro1' => 'italia', 'euro2' => 'eslovenia', 'euro3' => 'portugal');
$resultado = array_change_key_case($europa2, CASE_UPPER);
echo var_dump(key($resultado));



$aprendiz = array('ximena', 'marroquineria', (int) '22');
list($nombre, $formacion, $edad) = $aprendiz;
echo $nombre = $aprendiz[0]. "\r";
echo $formacion = $aprendiz[1] . "\r";
echo $edad = $aprendiz[2] . "\r";




$equipos = [ array('barcelona', 'atletico madrid')];

foreach($equipos as $equipo){
    list($team, $team2) = $equipo;
    echo "$team se enfrenta al $team2 en los cuartos de final de la champions" . "\r";
};


list($nombre, $edad) = array('messi', 39);
echo var_dump($nombre);
echo var_dump($edad);



$animales = array('Perro', 'gato', 'elefante', 'Delpin', 'AVE');
natcasesort($animales);
echo print_r($animales) . PHP_EOL . PHP_EOL;




$aprendices = array('marlon', 'steven', 'edward', 'pedro');
//echo pos($aprendices) . "\n";
//echo next($aprendices) . "\n";
echo end($aprendices) . "\n";
prev($aprendices) . "\n";
echo pos($aprendices) . "\n";





$rango = range(0, 10);
echo "TABLA DEL 2 \r" ;

function operador($valor){
    return "$valor * 2 = " . ($valor * 2); 
};
    
$resultado = array_map("operador", $rango);
echo print_r($resultado) . PHP_EOL . PHP_EOL;


$ciudades = array('bogotá', 'medellin', 'cali', 'barranquilla', 'bucaramanga');
echo var_dump(end($ciudades));
reset($ciudades);
echo var_dump(pos($ciudades));


$italianTeams = array('a' => 'juventus',  'b' => 'inter', 'napoles', 'roma', 'ac milan');
shuffle($italianTeams);
echo print_r($italianTeams) . PHP_EOL . PHP_EOL;



$englishTeams = [
    array('arsenal',  'chelsea'),
    array('man united', 'liverpool'),
    array('man city')
];
$result = sizeof($englishTeams, COUNT_RECURSIVE);
echo var_dump($result);



/*$artistas = array('a' => 'bad bunny', 'd' => 'ricardo arjona', 
                  'c' => 'los tigres del norte', 'b' => 'antonio zambrano');

uasort($artistas, function ($a, $b) {
    return $a <=> $b;
});

echo print_r($artistas) . PHP_EOL . PHP_EOL;*/



$artistas = array('a' => 'bad bunny', 'd' => 'ricardo arjona', 
                  'c' => 'los tigres del norte', 'b' => 'antonio zambrano');

uksort($artistas, function ($a, $b) {
    return $a <=> $b;
});

echo print_r($artistas);

