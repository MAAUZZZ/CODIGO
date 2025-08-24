<?php
// index.php

// Un título de la página
$titulo = "NOOOOOOOOOOOOOOO";

// Ejemplo de hora actual
$hora = date("H:i:s");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>
    <p>La hora actual es: <strong><?php echo $hora; ?></strong></p>
    <p>Este es un ejemplo sencillo de un index en PHP.</p>
</body>
</html>
