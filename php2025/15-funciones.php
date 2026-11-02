<?php
declare(strict_types=1);
function imprimirLinea(): void
{
    echo PHP_EOL;
}

function saludar($nombre = "Invitado", $mensaje = "¡Bienvenido!"): void
{
    echo "Hola, $nombre. $mensaje";
    imprimirLinea();
}

saludar(); // Imprime: Hola, Invitado. ¡Bienvenido!
saludar("Ana"); // Imprime: Hola, Ana. ¡Bienvenido!
saludar("Luis", "¡Qué bueno verte!"); // Imprime: Hola, Luis. ¡Qué bueno verte!

function sumar(int $a, int $b): int
{
    return $a + $b;
}

// Ejemplo de uso
echo sumar(5, 7); // Imprime: 12

imprimirLinea();

function esMayorDeEdad(int $edad): bool
{
    return $edad >= 18;
}

// Ejemplo de uso

echo "Es mayor de edad: " . (esMayorDeEdad(20) ? "Verdadero" : "Falso") . "\n";
echo "Es mayor de edad: " . (esMayorDeEdad(15) ? "Verdadero" : "Falso") . "\n";
imprimirLinea();

function crearUsuario(string $nombre, int $edad, string $pais = "México"): void
{
    echo "Nombre: $nombre\n";
    echo "Edad: $edad\n";
    echo "País: $pais\n";
}

crearUsuario(edad: 30, nombre: "Carlos", pais: "Perú");