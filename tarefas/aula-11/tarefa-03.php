<?php
header("Content-Type: text/html; charset=utf-8");
/***************************************************************** 
	Tarefa 3: (use WHILE) 
		Agora crie um programa que faz a contagem regressiva para
		o lançamento de um foguete. Deve mostrar primeiro o 10 e 
		por último o 0;
*****************************************************************/


$cont = 10;
while ( $cont >= 0 ) {
	echo $cont . "<br>";
	$cont = $cont - 1;
}











?>