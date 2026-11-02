<?php

function imprimirLinea(): void
{
    echo PHP_EOL;
}

$nombreCliente = "   José   ";
echo strlen($nombreCliente);
imprimirLinea();
echo $nombreCliente;
imprimirLinea();
$nombreCliente = trim($nombreCliente);
echo $nombreCliente;
imprimirLinea();
echo strtoupper($nombreCliente);
imprimirLinea();
echo strtolower($nombreCliente);
imprimirLinea();

$nombreCliente = "José Luis";
echo str_replace("José", "J", $nombreCliente);
imprimirLinea();

// Revisar si un string existe o no
echo strpos($nombreCliente, "Luis");
imprimirLinea();

$tipoCliente= "Premium";
echo "El cliente ". $nombreCliente ." es ". $tipoCliente;
imprimirLinea();
echo "El cliente {$nombreCliente} es {$tipoCliente}";
imprimirLinea();

echo "Introduce tu nombre: ";
$nombre = trim(fgets(STDIN)); // `trim()` elimina espacios en blanco y saltos de línea
echo "Hola, $nombre!";