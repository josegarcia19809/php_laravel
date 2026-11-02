<?php

function imprimirLinea()
{
    echo PHP_EOL;
}

$clientes = array("Pedro", "María", "Carolina");

foreach ($clientes as $cliente) {
    echo "$cliente\n";
}

imprimirLinea();

for ($i = 0; $i < count($clientes); $i++) {
    echo "$clientes[$i]\n";
}

imprimirLinea();

$cliente = [
    "nombre" => "Juan",
    "saldo" => 200,
    "tipo" => "Premium"
];

foreach ($cliente as $key => $value) {
    echo "$key: $value\n";
}

imprimirLinea();

$productos = [
    [
        "nombre" => "Tablet",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => "Laptop",
        "precio" => 750,
        "disponible" => true
    ],
    [
        "nombre" => "Smartphone",
        "precio" => 500,
        "disponible" => false
    ],
    [
        "nombre" => "Monitor",
        "precio" => 300,
        "disponible" => true
    ],
    [
        "nombre" => "Teclado",
        "precio" => 50,
        "disponible" => false
    ]
];

foreach ($productos as $producto) {
    echo var_dump($producto);
}

imprimirLinea();

foreach ($productos as $producto) {
    echo "Producto: " . $producto['nombre'] . "\n";
    echo "Precio: " . $producto['precio'] . "\n";
    if ($producto['disponible']) {
        echo "El producto está disponible" . "\n";
    } else {
        echo "No Disponible\n";
    }

    // Operador ternario
    echo ($producto['disponible']) ? "Si hay" : "No hay";
    imprimirLinea();
    echo str_repeat("-", 100);
    imprimirLinea();
}