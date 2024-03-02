<?php


#Ejercicio dos:
//Usando la estructura de control for has un ciclo iniciando en cero que incremente de 3 en 3 hasta llegar al primer numero de impar despues de 30.
for ($i = 0; $i <= 35; $i += 3) {
    if ($i % 2 != 0 && $i > 35) {
    }

    echo "============================================  <br> ";
    echo "El primer numero impar despues de 30 es :" .$i;
    echo "============================================  <br> ";
}


/*/ aqui me muestra despues del 30
for ($i = 33;; $i += 3) {
    if ($i % 2 != 0) {
        echo "El primer número impar después de 30 es el numero : $i";

    }
}*/


