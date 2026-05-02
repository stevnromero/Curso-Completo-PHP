<?php

/*
// expresiones regulares


// metacaracteres

// . --> coincide con cualquier caracter excepto salto de línea
preg_match("/...../", "hola!", $array);
//print_r($array);

preg_match_all("/.../", "abcdefghi", $array);
//print_r($array);

$texto = "abcdef";
//echo preg_replace("/../", "X", $texto);


print_r(preg_split("/..../", "abcdefghij"));


$array = ["sol", "casa", "luna", "php", "code"];
print_r(preg_grep("/^....$/", $array));


// ^ --> inicio de cadena
preg_match("/^hola/", "holla", $array);
var_dump($array);


preg_match_all("/^a/m", "ana\nluis\nandres\nmaria", $array);
print_r($array);

echo preg_replace("/^php/", "JS", "php es bueno");

print_r(preg_split("/^abc/", "abcdefghi"));

print_r(preg_grep("/^p/", ["php", "java", "python", "c++"]));


// $ --> fin de cadena
preg_match("/mundo$/", "hola mundo", $array);
print_r($array);

preg_match_all("/a$/m", "ana\nluis\nmaria\npedro\nsofia", $array);
print_r($array);

echo preg_replace("/php$/", "JS", "aprendo php");

print_r(preg_split("/xyz$/", "abcdefxyz"));

print_r(preg_grep("/n$/", ["pan", "queso", "jamon", "arroz"]));



// \d --> dígito
preg_match("/\d/", "pedido123", $array);
print_r($array);

preg_match_all("/\d+/", "Producto 123 cuesta 456 y 789", $array);
print_r($array);

echo preg_replace("/\d/", "X", "abc123def456");

print_r(preg_split("/\d+/", "abc123def456ghi"));

print_r(preg_grep("/\d/", ["abc", "123", "a1b2", "xyz"]));

preg_match("/^\d+$/", "12345", $array);
print_r($array);



// \w --> carácter de palabra (letras, dígitos, guion bajo)
// \W --> carácter no de palabra
preg_match("/\w+/", "!!!@@@abc", $array);
print_r($array);

preg_match_all("/\w+/", "hola mundo_123 PHP!", $array);
echo print_r($array);

echo preg_replace("/\W+/", "-", "hola, mundo! PHP#2026");

echo print_r(preg_split("/\W+/", "hola,mundo!PHP-2026"));

echo print_r(preg_grep("/\w/", ["!!!", "abc", "123", "@@@", "php_7"]));

preg_match("/^\w+$/", "user_123", $array);
print_r($array);



// \s --> espacio en blanco (espacio, tabulación, salto de línea)
// \S --> carácter no espacio en blanco

if(preg_match("/\s/", "Hola Mundo", $array)){
    echo var_dump($array);
} else {
    echo "no hay espacio";
}


if(preg_match_all("/\s/", "uno dos tres cuatro", $array)){
    echo var_dump($array);
} else {
    echo "no hay espacio";
}


echo preg_replace("/\s+/", "-", "hola mundo PHP");

print_r(preg_split("/\s+/", "php es muy potente"));

print_r(preg_grep("/\s/", ["hola", "hola mundo", "php", "codigo limpio"]));



if(preg_match("/^\s+$/", "      ", $array)){
    echo var_dump($array);
} else {
    echo "no hay espacio";
}

*/



// CUANTIFICADORES


// * --> coincide con cero o más repeticiones del elemento anterior
// preg_match("/a*b/", "aaab", $matches);
// print_r($matches);


// preg_match_all("/aa*/", "b ab aab aaab", $matches);
// print_r($matches);

// echo preg_replace("/a*b/", "X" ,"b ab aab aaab");

// print_r(preg_split("/a*b/", "1ab2aab3aaab4b5"));

// print_r(preg_grep("/a*b/", ["b", "ab", "aab", "xyz", "ba", "aaab"]));




// + --> coincide con una o más repeticiones del elemento anterior

// preg_match("/9+/", "9999", $array);
// print_r($array);

// preg_match_all("/[a-zA-Z]+/", "php8 mysql7 js", $array);
// print_r($array);

// preg_match_all("/\s+/", "hola   mundo    php", $array);
// print_r($array);

// preg_match_all("/[a-zA-Z]+/", "coooool aaeeiioouu texto", $array);
// print_r($array);

// print_r(preg_split("/[a-d]+/", "a1b22c333d"));

// echo preg_replace("/!+/", "!", "hola!!! que!!!! tal!");



// ? --> coincide con cero o una repetición del elemento anterior

// if(preg_match('/colou?r/', 'color', $array)){
//     echo "si coincide";
// } else {
//     echo "no coincide";
// }

// preg_match_all("/qu?e?/", "que qeu quu qe", $array);
// print_r($array);

// echo preg_replace("/4?-/", "X","123-456 789-012 345678");




// {n} --> coincide con exactamente n repeticiones del elemento anterior
// preg_match_all("/[a-f]{2}/", "aa bb ccc dd e fff", $array);
// print_r($array);

// preg_match("/\d{3}/", "abc123xyz", $array);
// print_r($array);

// echo preg_replace("/[0-9]{4}/", "X", "1234 567 8901 12 9999");

// print_r(preg_split("/[A-Z]+/", "abcDEFghiJKLmn"));

// print_r(preg_grep("/^[a-zA-Z]{5}$/", ["hello", "worlds", "hi", "php", "coding"]));


// preg_match_all("/\d{4}/", "1234 12345 12 0000 999", $array);
// print_r($array);





// {n,} --> coincide con n o más repeticiones del elemento anterior
// {n,m} --> coincide con entre n y m repeticiones del elemento anterior

// preg_match("/\d{1,3}/", "ab1234cd", $array);
// print_r($array);

// preg_match_all("/[^abc]{2,4}/", "a ab abc abcd abcde", $array);
// print_r($array);

// echo preg_replace("/\s{2,}/", " ", "hola   mundo    php") . PHP_EOL;

// print_r(preg_split("/\d{2,3}/", "a12b345c6789d"));

// print_r(preg_grep("/[a-z]{4}$/", ["php", "java", "python", "c", "ruby"]));











<?php

preg_match("/php/i", "PHP es genial", $array);
print_r($array);


preg_match_all("/hola/i", "Hola hola HOLA HoLa", $array);
print_r($array);


echo preg_replace("/error/i", "OK", "Error ERROR error eRrOr") . PHP_EOL;

print_r(preg_split("/and/i", "PHP and Java AND Python aNd C++"));


print_r(preg_grep("/test/i", ["Test", "TEST", "demo", "testing", "TeStCase"]));
