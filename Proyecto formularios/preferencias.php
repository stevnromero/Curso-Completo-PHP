<?php
$nombre = "";
$color = "";

//parte 1
if(isset($_POST["name"]) && isset($_POST["color"])){
    $nombre = $_POST['name'];
    $color = $_POST['color'];

    echo "<h1>Hola $nombre, tu color favorito es $color</h1>";

    setcookie("name", $nombre, time() + 3600);
    setcookie("color", $color, time() + 3600);
}
//parte 2
elseif(isset($_COOKIE["name"]) && isset($_COOKIE["color"])){

    $nombre = $_COOKIE['name'];
    $color = $_COOKIE['color'];

    echo "<h1>Hola otra vez $nombre</h1>";

}

echo "<br>";
?>