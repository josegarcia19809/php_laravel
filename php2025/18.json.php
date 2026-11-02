<?php

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

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
echo $json;

$json_to_array = json_decode($json);
echo "\n";
echo var_dump($json_to_array);