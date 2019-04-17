<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */
echo '<br>','tabla del 2 "for"';
for ($i=1 ; $i<=10; $i++){
	$multiplica=2*$i;
	echo '<br>',"$i * 2 = ", "$multiplica";
}



echo '<br>','tabla del 2 "while"';
$w = 1;
while ($w <= 10) {
	$multi = $w * 2;
	echo '<br>',"2 * $w =" , "$multi";	
	$w++;
}



echo '<br>','tabla del 2 "do while"';
$d=1;
do {
    $multip = $d * 2;
	echo '<br>',"2 * $d =" , "$multip";	
	$d++;
} while ($d <=10);
?>