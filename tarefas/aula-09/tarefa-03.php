<?php
header("Content-Type: text/html; charset=utf-8");
/***************************************************************** 
	Tarefa 3: (USE SWITCH CASE) 
		Agora nós vamos criar um controle remoto. Quando o número
		do canal for digitado, ele deve exibir o nome da emissora.
		- Faça testes para que sejam exibidos os canais SBT e Globo
*****************************************************************/


function controleRemoto($canal) {

	switch($canal) {
		case 2: 
			echo "Record";
			break;
		case 4:
			echo "Rede TV";
			break;
		case 5:
			echo "SBT";
			break;
		case 7:
			echo "Bandeirante";
			break;
		case 12:
			echo "Globo";
			break;
		default:
			echo "canal inválido";
	}


}

echo controleRemoto(13);







?>