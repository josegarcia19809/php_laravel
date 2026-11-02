<?php

function imprimirLinea()
{
    echo PHP_EOL;
}

$clientes = [];
$clientes2 = array();
$clientes3 = array("Carolina", "Rox", "Julian");

$cliente = [
    'nombre' => 'Carolina',
    'saldo' => 200
];

var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($clientes3));

imprimirLinea();

// Isset: revisar si un arreglo está creado o si una propiedad está definida
var_dump(isset($clientes4));
var_dump(isset($clientes3));

echo "Existe la propiedad 'nombre' en cliente: ";
var_dump(isset($cliente['nombre']));

echo "Existe la propiedad 'codigo' en cliente: ";
var_dump(isset($cliente['codigo']));