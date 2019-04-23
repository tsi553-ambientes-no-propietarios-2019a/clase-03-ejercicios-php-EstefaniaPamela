<?php

/**

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */
$texto = "Murcielago";
/**cuanta el numero de letras que tiene el string */
$caracteres = strlen($texto);

/** Cuenta el número de apariciones del substring, es decir
 * cuenta las veces que apareceran las vocales */
$vocales = 
substr_count($texto, 'a')+substr_count($texto, 'e')
+substr_count($texto, 'i')+substr_count($texto, 'o')
+substr_count($texto, 'u')+substr_count($texto, 'A')
+substr_count($texto, 'E')+substr_count($texto, 'I')
+substr_count($texto, 'O')+substr_count($texto, 'U');

$a = substr_count($texto, 'a') + substr_count($texto, 'A');
$e = substr_count($texto, 'e') + substr_count($texto, 'E');
$i = substr_count($texto, 'i') + substr_count($texto, 'I');
$o = substr_count($texto, 'o') + substr_count($texto, 'O');
$u = substr_count($texto, 'u') + substr_count($texto, 'U');

echo "<br>","La palabra es:", $texto;
echo "<br>","El número total de caracteres es", $caracteres ;
echo "<br>","El total de vocales es", $vocales;
echo "<br>","El numero de vocales a  es:", $a ;
echo "<br>","El numero de vocales e  es:" ,$e ;
echo "<br>","El numero de vocales i  es:", $i ;
echo "<br>","El numero de vocales o  es:", $o ;
echo "<br>","El numero de vocales u  es:", $u ;
?>