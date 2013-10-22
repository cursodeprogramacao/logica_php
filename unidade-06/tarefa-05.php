<?php
header("Content-Type: text/html; charset=utf-8");
/***************************************************************** 
	Tarefa 5: (use DO WHILE) 
		O comando do - while não é muito usado quando programamos
		para a internet. Em 12 anos programando, não me lembro de 
		ter usado ele alguma vez. De qualquer forma, vou mostrar um 
		exemplo rápido, para você entender a sintaxe. Esse exemplo
		não terá um vídeo.
*****************************************************************/

// Mostra os números de 1 a 10 usando o comando do - while
// A grande diferença dele em relação ao while comum é que os
// comandos que estão no bloco do DO { } serão executados pelo
// menos uma vez, pois aparecem antes da comparação, que fica
// no final do código.
$cont = 1;
do {
	echo $cont . "<br>";
	$cont++;
} while ( $cont <= 10 )







