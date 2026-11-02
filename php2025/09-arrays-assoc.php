<?php
function imprimirLinea(): void
{
    echo PHP_EOL;
}

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 100,
    'información' => [
        'tipo' => 'premium',
    ]
];

var_dump($cliente);

imprimirLinea();
echo $cliente['nombre'];
imprimirLinea();
echo $cliente['saldo'];
imprimirLinea();
echo $cliente['información']['tipo'];
imprimirLinea();

// Agregar un nuevo elemento
$cliente['codigo']=1234567;
echo $cliente['codigo'];