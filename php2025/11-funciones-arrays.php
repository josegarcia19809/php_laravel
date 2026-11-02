<?php

function imprimirLinea()
{
    echo PHP_EOL;
}

// in_array: buscar elementos en un arreglo
$carrito = ["Tablet", "Computadora", "Televisión"];

echo "Existe 'Tablet' en 'carrito': ";
var_dump(in_array("Tablet", $carrito));

echo "Existe 'Audifonos' en 'carrito': ";
var_dump(in_array("Audifonos", $carrito));

// Ordenar elementos de un arreglo
$numeros = array(7, 6, 5, 4, 3);
sort($numeros);
echo implode(", ", $numeros);
imprimirLinea();

rsort($numeros); // Descendente
echo implode(", ", $numeros);
imprimirLinea();

// Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Carolina'
);

imprimirLinea();
asort($cliente); // Ordena por valores
echo "Ordenado por valores:\n";
foreach ($cliente as $key => $value) {
    echo $key . " " . $value . "\n";
}

imprimirLinea();
ksort($cliente);
echo "Ordenado por llaves:\n";
foreach ($cliente as $key => $value) {
    echo $key . " " . $value . "\n";
}

imprimirLinea();
krsort($cliente); // En orden inverso
// En una sola línea
echo "Ordenado por llaves en orden inverso: " . json_encode($cliente) . "\n";

arsort($cliente);
echo "Ordenado por valores en orden inverso: " . json_encode($cliente) . "\n";