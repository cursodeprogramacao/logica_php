<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************************** 
	Tarefa 2: (USE SWITCH CASE)
		Crie um função que recebe um número referente ao mês e retorna
		o nome do mês equivalente. 1 para Janeiro, 2 para Fevereiro, 3 para
		março e assim por diante, até 12 para dezembro.
		- Teste com os valores 3, 8, 12 e 15.
**********************************************************************/



function nomeMes($mes) {
	
	switch($mes) {
		case 1: return "Janeiro";
		case 2: return "Fevereiro";
		case 3: return "Março";
		case 4: return "Abril";
		case 5: return "Maio";
		case 6: return "Junho";
		case 7: return "Julho";
		case 8: return "Agosto";
		case 9: return "Setembro";
		case 10: return "Outubro";
		case 11: return "Novembro";
		case 12: return "Dezembro";
		default: return "mês inválido";

	}


}

echo nomeMes(15);


?>