<?php
/////////////////////Ejercicio 1
/*Problema de Lista Invertida:
Escribe un programa que tome un array de números y devuelva una nueva lista
que contenga los mismos elementos en orden inverso.*/

function invertirLista ($arr) {
    return array_reverse($arr);
}

$myArray = [1,2,3,4,5];

echo "Lista original: ";
print_r($myArray);
echo "Lista invertida: ";
print_r(invertirLista($myArray));

/////////////////////Ejercicio 2
/*Problema de Suma de Números Pares:
Crea un script que sume todos los números pares en un array de números enteros.*/

function sumarPares ($arr) {
    
    $suma = 0;
    foreach($arr as $numero){
        
        if ($numero % 2 === 0) { 
            $suma += $numero;
        }
    }
    return $suma;
}

$myNewArr = [7,2,4,4,16,25];
echo "Suma de numeros pares: ";
print(sumarPares ($myNewArr));
echo"\n";

/////////////////////Ejercicio 3
/*Problema de Frecuencia de Caracteres:
Implementa una función que tome una cadena de texto y devuelva un array asociativo 
que muestre la frecuencia de cada carácter en la cadena.*/

function calcularFrec ($cadena) {
    $frecuencia = [];

    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        
        
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            
            $frecuencia[$caracter] = 1;
        }
    }
    return $frecuencia;
}

$myString = "paranguaricutirimicuaro";
echo "Frecuencia de caracteres:";
print_r(calcularFrec ($myString));

/////////////////////Ejercicio 4
/*Problema de Bucle Anidado:
Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos
en forma de pirámide.*/
function hacerPiramide ($filas) {
    for ($i = 1; $i <= $filas; $i++) { 
        
        for ($j = 1; $j <= $filas - $i; $j++) {
            echo "  ";
        }
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "**";
        }

        echo "\n";
    }
    
}

$filas = 10;
hacerPiramide ($filas);
?>    

