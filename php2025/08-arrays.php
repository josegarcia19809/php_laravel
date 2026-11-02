<?php

function imprimirLinea(): void
{
    echo PHP_EOL;
}

$carrito = ['Tablet', 'Televisión', 'Computadora'];
var_dump($carrito);
imprimirLinea();
echo "Elemento 1 del carrito: ". $carrito[1];
imprimirLinea();
$carrito[3] = 'Celular';
var_dump($carrito);
imprimirLinea();

// Añadir al final
$carrito[] = 'Audifonos';
var_dump($carrito);
imprimirLinea();

// Añadir al inicio
array_unshift($carrito, 'Smartwatch');
var_dump($carrito);
imprimirLinea();


// Otra forma
$clientes = array('Maria', 'Rox', 'José');
var_dump($clientes);