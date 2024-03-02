<?php
//Helen Acevedo Tobar
#Ejercicio 1
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


#Ejercicio dos:
//Usando la estructura de control for has un ciclo iniciando en cero que incremente de 3 en 3 hasta llegar al primer numero de impar despues de 30.
for ($i = 0; $i <= 30; $i += 3) {
    if ($i % 2 != 0 && $i > 30) {
        echo "El primer número impar después de 30 es: $i";
        break;
    }
}

?>
