<?php
define('NOMBRE', 'Johan');
define("PLAYERS", array('Messi', 
    'Cristiano Ronaldo', 
    'Neymar'));
echo "\n";
const MY_NAME = "Johan";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1, h2 , h3, h4, h5{
        color: black;
        text-align: center;
        font-weight: bold;
        font-size: 50px;
    }
</style>
<body>
    <h1><?php echo "🏍️". "Mi nombre es: " . NOMBRE . "🥅";?></h1>
    <h2><?php echo PLAYERS[0];?></h2>
    <h3><?php echo MY_NAME;?></h3>
    <h4><?php echo "La direccion actual es: " . __file__?></h4>
    <h5><?php echo "El sistema operativo es: "  . PHP_OS?></h5>
</body>
</html>