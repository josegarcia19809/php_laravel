<?php
function imprimirLinea()
{
    echo PHP_EOL;
}

$contador = 1;
while ($contador <= 5) {
    echo "Iteración $contador con while\n";
    $contador++;
}
imprimirLinea();

$contador = 1;
do {
    echo "Iteración $contador con do...while\n";
    $contador++;
} while ($contador <= 5);

imprimirLinea();

for ($i = 1; $i <= 5; $i++) {
    echo "Iteración $i con for\n";
}