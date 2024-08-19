<?php 

	$op = 7;

	echo "<h1>Escolha:</h1><div style=color: #333333';><h3><p><p>1 - banana<p>2 - laranja<p> 3 - abacaxi<p> 4 - sair</h3></div>";
	switch ($op) {
		case '1':
			echo "Você escolheu banana!";
			break;
		case '2':
			echo "Você escolheu laranja!";
			break;
		case '3':
			echo "Você escolheu abacaxi!";
			break;
		case '4':
			echo "Você saiu.";
			break;

		default:
			echo "Você não escolheu nada filho.";
			break;
	}

?>