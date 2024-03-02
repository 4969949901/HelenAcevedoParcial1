<?php
//Helen Acevedo Tobar
$a = 0;
$b = 0;
$numero = 0;
while ($numero <= 50) {
    if ($numero % 2 != 0) {
        $a += $numero;
    } else {

        $b += $numero;
    }
    $numero++;
}

echo "La suma de los números impares en el rango de los numeros de 0 a 50 es de: $a <br>";
echo "La suma de los números pares en el rango de los numeros de  0 a 50  es  de: $b";


