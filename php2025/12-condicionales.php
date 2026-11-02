<?php

function imprimirLinea()
{
    echo PHP_EOL;
}

$autenticado = (bool)rand(0, 1);

if ($autenticado) {
    echo "Usuario autenticado\n";
} else {
    echo "Usuario no autenticado\n";
}
imprimirLinea();

// If anidados
$cliente = [
    "nombre" => "Juan",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "Premium"
    ]
];

if (!empty($cliente)) {
    echo "El arreglo 'cliente' no está vacio\n";
    if ($cliente["saldo"] > 0) {
        echo "El cliente tiene saldo\n";
    }
}

$lenguajes = ["PHP", "JavaScript", "Python", "Java", "C#", "Ruby", "Go", "Swift"];
$tecnologia = $lenguajes[array_rand($lenguajes)];

switch ($tecnologia) {
    case "PHP":
        echo "PHP, un excelente lenguaje";
        break;
    case "Java":
        echo "Java, un excelente lenguaje";
        break;
    case "Python":
        echo "Python, un excelente lenguaje";
        break;
    case "Ruby":
        echo "Ruby, un excelente lenguaje";
        break;
    case "Go":
        echo "Go, un excelente lenguaje";
        break;
    case "Swift":
        echo "Swift, un excelente lenguaje";
        break;
    default:
        echo "Algún lenguaje";
        break;
}
imprimirLinea();
$tecnologia = $lenguajes[array_rand($lenguajes)];
echo match ($tecnologia) {
    "PHP" => "PHP, un excelente lenguaje",
    "Java" => "Java, un excelente lenguaje",
    "Python" => "Python, un excelente lenguaje",
    "Ruby" => "Ruby, un excelente lenguaje",
    "Go" => "Go, un excelente lenguaje",
    "Swift" => "Swift, un excelente lenguaje",
    default => "Algún lenguaje",
};

imprimirLinea();
$numero = 5;      // Entero
$texto = "5";     // Cadena

// Comparación con ==
if ($numero == $texto) {
    echo "Son iguales con ==";  // Se imprime porque PHP convierte el string a número
} else {
    echo "No son iguales con ==";
}
imprimirLinea();
// Comparación con ===
if ($numero === $texto) {
    echo "Son iguales con ===";
} else {
    echo "No son iguales con ==="; // Se imprime porque 5 (int) no es igual a "5" (string)
}