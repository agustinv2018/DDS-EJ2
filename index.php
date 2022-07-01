<?php

//Respetando arquitectura propuesta en clase. (Nombre Carpeta 'tipos')
//Declarar tres variables a, b, y c. 
//Para cada variable imprimir mediante "echo" el tipo de variable.
//Si la variable "a" es un numero entero, sumarle 1000, e imprimirlo (echo).
//Si la variable "b" es un texto, imprimir. "La variable b es un texto y su valor es [b]"

$a = '10';
$b = 500;
$c = 'Argentina';


echo gettype($a);
echo '<hr>';

echo gettype($b);
echo '<hr>';

echo gettype($c);
echo '<hr>';


if (is_int($a)) {

    echo $a = $a + 1000;
}




echo '<hr>';
if (is_string($b)) {

    echo 'La variable b es un texto y su valor es ' . $b;
    //} else {

    //    echo 'La variable b no es una variable tipo string';
}

echo '<hr>';

if (is_string($c)) {


    echo 'La variable ' . $c . ' es de tipo string';
}
