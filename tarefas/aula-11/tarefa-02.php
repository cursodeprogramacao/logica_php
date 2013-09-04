<?php
header("Content-Type: text/html; charset=utf-8");
/************************************************************************ 
	Tarefa 2: (use WHILE)
		Crie um programa que mostre somente os números pares entre 1 e 100
*************************************************************************/


$cont = 1;
while ($cont <= 100) {
	if ( $cont % 2 == 0 ) {
		echo $cont . "<br>";
	}
	$cont++;
}








?>